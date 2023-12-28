<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;


class ProductUpdate extends Component
{
    use WithFileUploads;

    public $product;
    public $image;


    public $state = [];

    protected $rules = [
        'state.name' => 'required',
        'state.price' => 'required|numeric',
        'state.status' => 'required|in:available,unavailable',
        'image' => 'nullable|image|max:1024',
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->state = $product->toArray();
    }

    public function updateProduct()
    {
        $this->validate();

        if ($this->image) {
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('public/uploads', $imageName);

            $this->state['image'] = 'uploads/' . $imageName;
        }

        // $this->product->update([
        //     'name' => $this->state['name'],
        //     'price' => $this->state['price'],
        //     'status' => $this->state['status'],
        //     // Add other fields as needed
        // ]);
        $this->product->update($this->state);


        $this->emit('saved');

        // Optional: Redirect after saving
        // return redirect()->to('/products'); // Change this to your desired route
    }

    public function render()
    {
        return view('livewire.product-update');
    }
}
