@extends('layouts.dashboard')

@section('content')
<h1>Profile</h1>



{{-- <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div> --}}







<style>
    .align-top {
        font-size: 15px;
    }
    table.table1 > thead > tr{
        border-top: solid 5px white;
        border-bottom: solid 5px white;
    }
    table.table1 > thead > tr > th{
        padding-right: 50px;
    }
    #pass {
        border-bottom: solid 5px white;
    }
</style>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>

@if (session('profile_success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="suc">
        <svg class="bi flex-shrink-0 me-2 mr-1" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        {{ session('profile_success') }}
        <button type="button" class="btn btn-light border-0 mt-0" style="background-color: transparent; float: right; margin-right: 0%" data-bs-dismiss="alert" aria-label="Close" onclick="document.getElementById('suc').style.display = 'none' ">X</button>
    </div>
@endif

@if (session('profile_cancel'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="suc">
        <svg class="bi flex-shrink-0 me-2 mr-1" width="24" height="24" role="img" aria-label="warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        {{ session('profile_cancel') }}
        <button type="button" class="btn btn-light border-0 mt-0" style="background-color: transparent; float: right; margin-right: 0%" data-bs-dismiss="alert" aria-label="Close" onclick="document.getElementById('suc').style.display = 'none' ">X</button>
    </div>
@endif

@if (session('failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="failed">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        {{ session('failed') }}
        <button type="button" class="btn btn-light border-0 mt-0" style="background-color: transparent; float: right; margin-right: 0%" data-bs-dismiss="alert" aria-label="Close" onclick="document.getElementById('failed').style.display = 'none' ">X</button>
    </div>
@endif

<div class="table-responsive-lg">
    <table class="table table1">
        <thead>
            <tr>
                <th class="table-active align-top" scope="row">Profile</th>
                <td>
                    <table class="table table-borderless">
                        <thead>
                            <form action="/change-profile" method="post">
                                @csrf

                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Universitas</th>
                                    <td><input name="universitas" type="text" class="form-control @error('universitas') is-invalid @enderror" value="{{ auth()->user()->universitas }}">
                                        @error('universitas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nomor NIM</th>
                                    <td><input name="no_identitas" type="text" class="form-control @error('no_identitas') is-invalid @enderror" value="{{ auth()->user()->no_identitas }}">
                                        @error('no_identitas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th class="align-middle"> </th>
                                    <td class="align-middle"><button class="btn btn-warning">Change</button></td>
                                </tr>
                            </form>
                        </thead>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="table-active align-top" scope="row">Profile Picture</th>
                <td>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th><img style="width:30%; border-radius:10px;" src="/img/cek.png" alt="profile picture"></th>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="align-middle"><input style="border:none;" type="file"></th>
                                <td class="align-middle"> </td>
                            </tr>
                            <tr>
                                <th class="align-middle"><button class="btn btn-warning">Change</button></th>
                                <td class="align-middle"> </td>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="table-active align-top" scope="row">Team</th>
                <td><table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>1st Member Name</th>
                                <td><input type="text" class="form-control @error('') is-invalid @enderror" value="">
                                    @error('')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>2nd Member Name</th>
                                <td><input type="text" class="form-control @error('') is-invalid @enderror" value="">
                                    @error('')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>3rd Member Name</th>
                                <td><input type="text" class="form-control @error('') is-invalid @enderror" value="">
                                    @error('')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>4th Member Name</th>
                                <td><input type="text" class="form-control @error('') is-invalid @enderror" value="">
                                    @error('')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>5th Member Name</th>
                                <td><input type="text" class="form-control @error('') is-invalid @enderror" value=""></td>
                            </tr>
                            <tr>
                                <th class="align-middle"> </th>
                                <td class="align-middle"><button class="btn btn-warning">Change</button></td>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="table-active align-top" scope="row">Password</th>
                <td><table class="table table-borderless">
                        <thead>
                            <form action="/change-password" method="post">
                                @csrf

                                <tr>
                                    <th id="pass">Current Password</th>
                                    <td id="pass"><input id="a" type="password" required name="current_password" class="form-control @error('current_password') is-invalid @enderror" value="">
                                        @error('current_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>New Password</th>
                                    <td><input type="password" id="a" required name="password" class="form-control @error('password') is-invalid @enderror" value="">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Confirm Password</th>
                                    <td><input type="password" id="a" required name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="">
                                        @error('confirm_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <th class="align-middle"> </th>
                                    <td class="align-middle" id="apa"><button id="upa" type="button" style="background-color: white;width: 15px; height: 15px; border:solid 1px; border-radius: 2px"></button>&nbsp;&nbsp;<span style="position: relative; bottom:2px" onmouseover="this.style.cursor = 'pointer' ">Show Password</span></td>
                                </tr> --}}
                                <tr>
                                    <th class="align-middle"> </th>
                                    <td class="align-middle"><button class="btn btn-warning" type="submit">Change</button></td>
                                </tr>
                            </thead>
                        </form>
                    </table>
                </td>
            </tr>
            <tr id="bottom">
                <th class="table-active align-top" scope="row">E-Mail</th>
                <td><table class="table table-borderless">
                    <h1 id="ab"></h1>
                        <thead>
                            <form action="/change-email" method="post">
                                @csrf

                                <tr>
                                    <th id="pass">Current Password</th>
                                    <td id="pass"><input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" value="">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>New Email</th>
                                    <td><input type="text" name="email" required class="form-control @error('email') is-invalid @enderror" value="">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th class="align-middle"> </th>
                                    <td class="align-middle"><button class="btn btn-warning">Change</button></td>
                                </tr>
                            </form>
                        </thead>
                    </table>
                </td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>





@endsection
