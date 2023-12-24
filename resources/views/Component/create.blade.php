<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Add Trip</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('store-trip') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="departure">Departure Place</label>
                            <select name="departure" class="form-control">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->id }}. {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="destination">Destination Place</label>
                            <select name="destination" class="form-control">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->id }}. {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date">Date</label>
                            <input type="date" name="trip_date" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="time">Time</label>
                            <input type="time" name="trip_time" class="form-control">
                        </div>

                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary">Add</button>
                        </div>

                        <div class="text-center form-group mb-3">
                            <a href="{{ url('/') }}" class="col-12 btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
