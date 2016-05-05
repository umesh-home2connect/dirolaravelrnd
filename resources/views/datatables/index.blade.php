@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>2</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>3</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>4</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>5</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>6</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>7</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>8</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>9</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>10</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>11</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        <tr>
            <td>12</td>
            <td>umesh</td>
            <td>umesh@diro.io</td>
            <td>Today</td>
            <td>Today</td>
        </tr>
        </tbody>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
//        processing: true,
//        serverSide: true,
//        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush

