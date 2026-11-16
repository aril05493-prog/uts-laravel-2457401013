<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{
    private array $brands = ['Toyota', 'Honda', 'Hyundai'];

    public function home()
    {
        return view('home', ['totalCars' => Car::count()]);
    }

    public function index()
    {
        $cars = Car::latest()->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create', ['brands' => $this->brands]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => ['required', Rule::in($this->brands)],
            'model' => ['required', 'string', 'max:100'],
            'plate_number' => ['required', 'string', 'max:20', 'unique:cars,plate_number'],
            'year' => ['required', 'integer', 'min:1980', 'max:'.(date('Y') + 1)],
            'daily_rate' => ['required', 'numeric', 'min:0'],
            'last_service_at' => ['required', 'date'],
            'is_available' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string'],
            'color' => ['nullable', 'string', 'max:50'],
        ]);

        $validated['is_available'] = $request->boolean('is_available');
        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Data mobil berhasil ditambahkan.');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', ['car' => $car, 'brands' => $this->brands]);
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'brand' => ['required', Rule::in($this->brands)],
            'model' => ['required', 'string', 'max:100'],
            'plate_number' => ['required', 'string', 'max:20', Rule::unique('cars', 'plate_number')->ignore($car->id)],
            'year' => ['required', 'integer', 'min:1980', 'max:'.(date('Y') + 1)],
            'daily_rate' => ['required', 'numeric', 'min:0'],
            'last_service_at' => ['required', 'date'],
            'is_available' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string'],
            'color' => ['nullable', 'string', 'max:50'],
        ]);

        $validated['is_available'] = $request->boolean('is_available');
        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Data mobil berhasil diperbarui.');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Data mobil berhasil dihapus.');
    }
}
