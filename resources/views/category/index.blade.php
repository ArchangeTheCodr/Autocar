@extends('base')

@section('title')  
    Autocar | Categorie
@endsection

@section('content')  
    <h1>Les categories</h1>
    <ul>
        @foreach($categories as $category)
            <li>                
                <div>
                    <p>
                        {{$category->name}}
                        <a href="{{ route('category.show', ['id' => $category->id]) }}">Voir les vehicules</a>
                    </p>
                </div>

                <div>
                    <p>
                        <button>
                             <a href="{{ route('category.edit', $category->id) }}">
                                Modifier
                            </a> 
                        </button>
                        
                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Supprimer">
                        </form>
                    </p>
                </div>
            </li>

        @endforeach
    </ul>
@endsection