<div class="container">
    <h1>Create New Car</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="make">Make:</label>
            <input type="text" class="form-control" id="make" name="make">
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" id="year" name="year">
        </div>

        <div class="form-group">
        <label for="cartypes">Choose a cartype</label>
            <select name="car_type_id" id="car_type_id">
                @foreach ($cartypes as $cartype)
                <option value="{{$cartype->id}}">{{$cartype->name}}</option>
                @endforeach 
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    