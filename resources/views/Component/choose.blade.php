<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Book seat</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('book-seat/' . $trip->id) }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
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
                        </div>

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
