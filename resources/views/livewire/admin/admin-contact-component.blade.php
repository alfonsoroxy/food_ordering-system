<main>
  <style>
    nav svg{
      height: 20px;
    }
    nav .hidden{
      display: block !important;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
      color: #000000;
    }
    @media (max-width: 1200px) {
      .navbar-expand-lg .navbar-nav .nav-link {
        margin-left: 25px;
        color: #fff;
      }
    }
  </style>
  <div class="container" style="padding: 150px 0px;">
    <div class="row">
      <div class="col-mid-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mr-5">Contacts</h2>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Message</th>
                    <th>Created At</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach($contacts as $contact)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$contact->contact_name}}</td>
                        <td>{{$contact->contact_email}}</td>
                        <td>{{$contact->contact_number}}</td>
                        <td>{{$contact->contact_message}}</td>
                        <td>{{$contact->created_at}}</td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
            {{$contacts->links()}}
            <!-- pagination::bootstrap-4 -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
