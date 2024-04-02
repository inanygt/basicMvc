<h1>edit</h1>

<div class="container">
    <h1>Edit Car</h1>
    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Make:</label>
            <input type="text" class="form-control" id="make" name="make" value="{{ $car->make }}">
        </div>
        <div class="form-group">
            <label for="body">Model:</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
        </div>
        <div class="form-group">
            <label for="body">Year:</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $car->year }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
