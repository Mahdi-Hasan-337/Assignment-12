<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit information</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('book-seat/' . $trip->id) }}" method="POST">
                        @csrf

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
                            <input type="text" name="departure" class="form-control"
                                value="{{ $locationNames[$trip->departure] ?? $trip->departure }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="destination">Destination Place</label>
                            <input type="text" name="destination" class="form-control"
                                value="{{ $locationNames[$trip->destination] ?? $trip->destination }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="price">Time</label>
                            <input type="time" name="unit_price" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="price">Date</label>
                            <input type="date" name="unit_price" class="form-control">
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="quantity">Total Seats</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name please" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
                        </div> --}}

                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary">Confirm your seat</button>
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
