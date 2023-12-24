<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit information</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-product/' . $trip->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @php
                            $locationNames = [
                                1 => 'Dhaka',
                                2 => 'Comilla',
                                3 => 'Cox\'s Bazar',
                                4 => 'Chittagong',
                            ];
                        @endphp

                        <div class="form-group mb-3">
                            <label for="departure">Departure Place</label>
                            <select name="departure" class="form-control">
                                @foreach ($locationNames as $key => $name)
                                    <option value="{{ $key }}"
                                        @if ($trip->departure == $key) selected @endif>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="destination">Destination Place</label>
                            <select name="destination" class="form-control">
                                @foreach ($locationNames as $key => $name)
                                    <option value="{{ $key }}"
                                        @if ($trip->destination == $key) selected @endif>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date">Date</label>
                            <input type="date" name="trip_date" class="form-control" value="{{ $trip->trip_date }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="time">Time</label>
                            <input type="time" name="trip_time" class="form-control" value="{{ $trip->trip_time }}">
                        </div>

                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary">Edit</button>
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
