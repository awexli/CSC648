<!-- this is the dashboard list page for users -->
<!-- the detail of each user can be accessed by clicking "View Detail" -->
<!-- this page is only visible to admin user -->

@extends("Home.base")
@section("bodycontent")
<div class="main" style="background:#fff">
	<div class="content_top">
    <div class="container">
    
    	@include("Home.leftNavBar")
        <div class="col-md-9 content_right">
            <table class="table">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Creation Time</th>
                  <th scope="col">Operation</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Perry</td>
                  <td>2018-11-09</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>2018-11-10</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>2018-11-11</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Patch</td>
                  <td>2018-11-12</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Thomas</td>
                  <td>2018-11-13</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Jimmy</td>
                  <td>2018-11-14</td>
                  <td><a href="#">View Detail</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
	</div>
</div>
@endsection