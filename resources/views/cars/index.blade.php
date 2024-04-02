<div class="container">
<h1>Basic car MVC</h1>
  <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Create New car</a>
    <table class="table">
        <thead>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->cartype->name }}</td>
                    <td>
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('cars.delete', $car) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
