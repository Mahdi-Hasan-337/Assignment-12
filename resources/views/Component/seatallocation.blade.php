{{-- Contents for Analytics portion --}}
<div id="allocation-content-wrapper" style="display:none;">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="allocation-menu-toggle"></i>
            <h2 class="fs-2 m-0">Owner</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row my-5">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Trip Number</th>
                            <th scope="col">Passenger Name</th>
                            <th scope="col">Passenger Phone</th>
                            <th scope="col">Confirmed seat</th>
                            {{-- <th scope="col">Remaining Seat</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seatAllocations as $seatAllocation)
                            <tr>
                                <td scope="col">{{ $seatAllocation->id }}</td>
                                <td scope="col">{{ $seatAllocation->trip_id }} </td>
                                <td scope="col">{{ $seatAllocation->passenger_name }} </td>
                                <td scope="col">{{ $seatAllocation->passenger_phone }} </td>
                                <td scope="col">{{ $seatAllocation->total_seat }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
