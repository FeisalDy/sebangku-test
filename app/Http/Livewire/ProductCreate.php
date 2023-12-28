<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use Illuminate\Support\Facades\Http;


class ProductCreate extends Component
{
    use WithFileUploads;

    public $state = [
        'name' => '',
        'price' => '',
        'status' => 'available',
        'image' => null, // Initialize as null or empty as needed
    ];

    protected $rules = [
        'state.name' => 'required',
        'state.price' => 'required|numeric',
        'state.status' => 'required',
        'state.image' => 'nullable|image|max:10240',
    ];

    public function render()
    {
        return view('livewire.product-create');
    }

    public function saveProduct()
    {
        $validatedData = $this->validate($this->rules);

        // Handle Image Upload
        $imagePath = null;
        if ($this->state['image']) {
            $imagePath = $this->state['image']->store('uploads', 'public'); // Store the image in the 'public/uploads' directory
        }

        try {
            Product::create([
                'name' => $validatedData['state']['name'],
                'price' => $validatedData['state']['price'],
                'status' => $validatedData['state']['status'],
                'image' => $imagePath, // Save the image path to the 'image' column in the 'products' table
            ]);
            session()->flash('message', 'Product added successfully!');
            $this->reset(['state']);
            $this->emit('saved');
        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the error message
        }
    }

    public function deleteProduct($productId)
    {
        $response = Http::delete(route('products.destroy', ['product' => $productId]));

        if ($response->successful()) {
            session()->flash('message', 'Product deleted successfully!');
        } else {
            session()->flash('error', 'Failed to delete product.');
        }
    }
}
