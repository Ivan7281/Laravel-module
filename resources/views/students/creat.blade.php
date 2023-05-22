@extends('layouts.app')
@section('content')

    <form action="{{ route('students.store') }}" method="post">

        @csrf

        <label for="student_name">Lot Name</label>
        <input required name="student_name"/>
        <br/>

        <label for="cours">Start Date</label>
        <input required name="cours"/>
        <br/>

        <label for="speciality">End Date</label>
        <input required name="speciality"/>
        <br/>

        <label for="success_id">Rates</label>
        <select required name="success_id">
            <option>please select success</option>
            @foreach($success_list as $success_item)
                <option value="{{ $success_item->id }}">{{ $success_item->name }}</option>
            @endforeach
        </select>
        <br/>

        <button type="submit">Create</button>
    </form>
@endsection('content')
