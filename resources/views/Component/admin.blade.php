{{-- <!-- Contents for dashboard --> --}}
<div id="dashboard-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="dashboard-menu-toggle"></i>
            <h2 class="fs-2 m-0">Admin</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">

        <div>
            @if (SESSION('status'))
                <div class="alert alert-success">{{ SESSION('status') }}</div>
            @endif
        </div>
        <div>
            @if (SESSION('error'))
                <div class="alert alert-warning">{{ SESSION('error') }}</div>
            @endif
        </div>
        <div>
            <a href="{{ url('add-trip') }}" class="btn btn-primary col-12 p-2 rounded">ADD TRIP</a>
        </div>
        <div class="row my-5">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Deaprture</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Time</th>
                            <th scope="col">Date</th>
                            <th scope="col">Remaining Seat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trips as $trip)
                            <tr>
                                <td scope="col">{{ $trip->id }}</td>
                                <td scope="col">
                                    @if ($trip->departure == 1)
                                        Dhaka
                                    @elseif ($trip->departure == 2)
                                        Comilla
                                    @elseif ($trip->departure == 3)
                                        Cox's Bazar
                                    @elseif ($trip->departure == 4)
                                        Chittagong
                                    @else
                                        {{ $trip->departure }}
                                    @endif
                                </td>
                                <td scope="col">
                                    @if ($trip->destination == 1)
                                        Dhaka
                                    @elseif ($trip->destination == 2)
                                        Comilla
                                    @elseif ($trip->destination == 3)
                                        Cox's Bazar
                                    @elseif ($trip->destination == 4)
                                        Chittagong
                                    @else
                                        {{ $trip->destination }}
                                    @endif
                                </td>
                                <td scope="col">{{ $trip->trip_time }}</td>
                                <td scope="col">{{ $trip->trip_date }}</td>
                                <td scope="col">{{ $trip->remaining_seat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
