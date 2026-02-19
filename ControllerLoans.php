<?php

namespace App\Http\Controllers;

use App\Models\Loans;
use Illuminate\Http\Request;
use App\Http\Requests\RequestLoan;


class ControllerLoans extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Loans::query();
          $query->when($request->has('Titulo'), function ($q) use ($request) {
            $q->where('Titulo', 'like', '%' . $request->input('Titulo') . '%');
        })
            ->when($request->has('ISBN'), function ($q) use ($request) {
                $q->where('ISBN', 'like', '%' . $request->input('ISBN') . '%');
            })
            ->when($request->has('Estado'), function ($q) use ($request) {
                $q->where('Estado'. "=". $request->input('Estado'));
            });
         $books = $query ->get();
        return response()->json($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestLoan $request)
    {
        $validated = $request->validated();

        $isbn = $request->input('ISBN');
        $book = \App\Models\Books::where('ISBN', $isbn)->first();
        if (!$book) {
            return response()->json(['error' => 'Libro no encontrado'], 404);
        }

        if ($book->Copias_disponibles <= 0) {
            return response()->json(['error' => 'No hay copias disponibles'], 409);
        }

        $loan = Loans::create([
            'Nombre_solicitante' => $validated['nombre_solicitante'],
            'Fecha_prestamo' => now(),
            'Fecha_devolucion' => null,
            'books_id' => $book->id ?? null
        ]);

        $book->Copias_disponibles -= 1;
        $book->save();

        return response()->json($loan, 201);
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loans $loans)
    {
        $loan = Loans::find($loans->id);
        if (!$loan) {
            return response()->json(['error' => 'Préstamo no encontrado'], 404);
        }

        if ($loan->Fecha_devolucion !== null) {
            return response()->json(['error' => 'El libro ya fue devuelto'], 409);
        }

        $loan->Fecha_devolucion = now();
        $loan->save();

        $book = \App\Models\Books::find($loan->books_id);
        if ($book) {
            $book->Copias_disponibles += 1;
            $book->save();
        }

        return response()->json($loan, 200);
    }
}