@extends('layout.master')

@section('dyncontent')

<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h5>Company Details</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <!-- <li class="list-group-item">
              <a href="#">Company Profile</a>
            </li> -->
            <!-- <li class="list-group-item">
              <a href="#">Add Company</a>
            </li> -->
            <li class="list-group-item">
              <a href="#">Edit Company Profile</a>
            </li>
            <li class="list-group-item">
              <a href="#">Delete Company</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <h5>Company Profile</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" id="name" value="S-Cool Cambodia" readonly>
              </div>
              <!-- <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" value="Automotive - Vehicles" readonly>
              </div> -->
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" value="012 345 678 / 016 836 896" readonly>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="cambodia@scoolfilm.com" readonly>
              </div>
              <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" class="form-control" id="website" value="www.scool-international.com" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" rows="3" readonly>No.901, Kampuchea Krom Blvd (128), Sangkat Teuk Laak II, Khan Toul Kork , 12156, Phnom Penh</textarea>
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" rows="5" readonly>S-COOL is the world leading heat protection window film company with its head office in Singapore. Our proprietary products included Super Ceramic ATO window film, provides the best high heat protection and value for money. This is the result of dedications and efforts by our R&D team, whom founded the use of this special ceramic compound for maximum heat rejection. Our founders started marketing solar control window film since 2007, under the brand S-COOL Solar & Security Window Film.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

@stop
