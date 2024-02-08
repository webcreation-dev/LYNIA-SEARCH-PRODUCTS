<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Author;
use App\Models\Book;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Counter extends Component
{

    use WithPagination;

    public string $searchBook = "";

    public int $searchAuthor = 0;

    public Collection $authors;

    public function mount(): void {
        $this->authors = Author::pluck('name', 'id');
    }

    public function render()
    {
        $books = Book::with('author')
        ->when($this->searchBook !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchBook .'%'))
        ->when($this->searchAuthor > 0, fn(Builder $query) => $query->where('author_id', $this->searchAuthor))
        ->paginate(10);

        return view('livewire.counter', [
            'books' => $books
        ]);
    }

    public function updating($key): void
    {
        if ($key === 'searchBook' || $key === 'searchAuthor') {
            $this->resetPage();
        }
    }
}
