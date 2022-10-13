@extends('layouts.master')
@section('title')
    Dashboard For MAlekanpour
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Country
                                </th>
                                <th>
                                    City
                                </th>
                                <th class="text-right">
                                    Salary
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <td>{{$user->name}}</td> --}}
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="text-right">$36,738</td>
                                </tr>
                                <tr>
                                    <td>Minerva Hooper</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td class="text-right">$23,789</td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 class="card-title"> Table on Plain Background</h4>
                    <p class="category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th class="text-right">Salary</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dakota Rice</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="text-right">$36,738</td>
                                </tr>
                                <tr>
                                    <td>Minerva Hooper</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td class="text-right">$23,789</td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        sjdgfladfj
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
