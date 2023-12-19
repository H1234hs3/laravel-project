@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="mb-2 page-title">Services/show all </h2>
    <div class="row my-4">
      <!-- Small table -->
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <!-- table -->
            <table class="table datatables" id="dataTable-1">
              <thead>
                <tr>
                  <th></th>
                  <th>#</th>
                  <th>Name</th>
                  <th>cost</th>
                  <th>type</th>

                  <th>Action</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>286</td>
                  <td>Russell Simon</td>
                  <td>(499) 664-6600</td>
                  <td>Public Relations</td>
                  <td>Adobe</td>
                  <td>Ap #974-1629 Placerat, Ave</td>
                  <td>Coimbatore</td>
                  <td>Oct 5, 2019</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>400</td>
                  <td>Tatum Benton</td>
                  <td>(844) 240-9223</td>
                  <td>Public Relations</td>
                  <td>Borland</td>
                  <td>5639 Inceptos Road</td>
                  <td>Cedar Rapids</td>
                  <td>Jan 5, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>493</td>
                  <td>Arden Harrington</td>
                  <td>(380) 763-0890</td>
                  <td>Quality Assurance</td>
                  <td>Altavista</td>
                  <td>P.O. Box 485, 2533 Tincidunt Road</td>
                  <td>Central Jakarta</td>
                  <td>Feb 29, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>419</td>
                  <td>Hayes Fitzpatrick</td>
                  <td>(756) 216-2498</td>
                  <td>Customer Relations</td>
                  <td>Lavasoft</td>
                  <td>755-4189 Auctor, Avenue</td>
                  <td>Frankfort</td>
                  <td>Jun 18, 2019</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>203</td>
                  <td>Barbara Charles</td>
                  <td>(487) 840-1443</td>
                  <td>Research and Development</td>
                  <td>Microsoft</td>
                  <td>217-2734 Rhoncus Street</td>
                  <td>Fogliano Redipuglia</td>
                  <td>Jul 17, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>443</td>
                  <td>Kenyon Glover</td>
                  <td>(593) 822-4946</td>
                  <td>Sales and Marketing</td>
                  <td>Adobe</td>
                  <td>3615 Blandit St.</td>
                  <td>San Bernardo</td>
                  <td>Dec 11, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>346</td>
                  <td>Evan Figueroa</td>
                  <td>(803) 974-4759</td>
                  <td>Payroll</td>
                  <td>Yahoo</td>
                  <td>P.O. Box 801, 9864 Lobortis Ave</td>
                  <td>Santa Bárbara</td>
                  <td>Jun 4, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>237</td>
                  <td>Xavier Riley</td>
                  <td>(135) 789-4714</td>
                  <td>Sales and Marketing</td>
                  <td>Macromedia</td>
                  <td>Ap #317-3617 Nulla Av.</td>
                  <td>Castor</td>
                  <td>Apr 23, 2021</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>497</td>
                  <td>Ray Hess</td>
                  <td>(297) 183-1287</td>
                  <td>Payroll</td>
                  <td>Borland</td>
                  <td>9049 Duis St.</td>
                  <td>Basingstoke</td>
                  <td>Dec 2, 2019</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>368</td>
                  <td>Renee Wolf</td>
                  <td>(734) 594-1676</td>
                  <td>Asset Management</td>
                  <td>Lycos</td>
                  <td>Ap #939-7635 Quisque Road</td>
                  <td>Squillace</td>
                  <td>Oct 2, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>228</td>
                  <td>Caldwell White</td>
                  <td>(763) 192-7853</td>
                  <td>Payroll</td>
                  <td>Yahoo</td>
                  <td>146 Integer Street</td>
                  <td>Newark</td>
                  <td>Mar 9, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>247</td>
                  <td>Lance Bush</td>
                  <td>(197) 616-3571</td>
                  <td>Finances</td>
                  <td>Lavasoft</td>
                  <td>P.O. Box 377, 2374 Pellentesque. Road</td>
                  <td>Kapuskasing</td>
                  <td>May 11, 2019</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>427</td>
                  <td>Clark Dennis</td>
                  <td>(239) 172-7907</td>
                  <td>Human Resources</td>
                  <td>Finale</td>
                  <td>Ap #978-3375 Adipiscing Av.</td>
                  <td>High Level</td>
                  <td>Sep 16, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> <!-- simple table -->
    </div> <!-- end section -->
  </div> <!-- .col-12 -->
@endsection
