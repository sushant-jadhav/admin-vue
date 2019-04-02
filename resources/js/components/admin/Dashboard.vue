<template>
  <div>
    <div class="row">
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
          <div class="box bg-cyan text-center">
            <h1 class="font-light text-white">
              <i class="mdi mdi-view-dashboard"></i>
            </h1>
            <h6 class="text-white">Dashboard</h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
          <div class="box bg-success text-center">
            <h1 class="font-light text-white">
              <i class="mdi mdi-chart-areaspline"></i>
            </h1>
            <h6 class="text-white">Charts</h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
          <div class="box bg-warning text-center">
            <h1 class="font-light text-white">
              <i class="mdi mdi-collage"></i>
            </h1>
            <h6 class="text-white">Widgets</h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
          <div class="box bg-danger text-center">
            <h1 class="font-light text-white">
              <i class="mdi mdi-border-outside"></i>
            </h1>
            <h6 class="text-white">Tables</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- column -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Latest Posts</h4>
          </div>
          <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/1.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text w-100">
                <h6 class="font-medium">James Anderson</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">April 14, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/4.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text active w-100">
                <h6 class="font-medium">Michael Jorden</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">May 10, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/5.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text w-100">
                <h6 class="font-medium">Johnathan Doeting</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">August 1, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To Do List</h4>
            <div class="todo-widget scrollable" style="height:450px;">
              <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                <li class="list-group-item todo-item" data-role="task">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label todo-label" for="customCheck">
                      <span
                        class="todo-desc"
                      >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                      <span class="badge badge-pill badge-danger float-right">Today</span>
                    </label>
                  </div>
                  <ul class="list-style-none assignedto">
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/1.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Steave"
                      >
                    </li>
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/2.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Jessica"
                      >
                    </li>
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/3.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Priyanka"
                      >
                    </li>
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/4.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Selina"
                      >
                    </li>
                  </ul>
                </li>
                <li class="list-group-item todo-item" data-role="task">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label todo-label" for="customCheck1">
                      <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span>
                      <span class="badge badge-pill badge-primary float-right">1 week</span>
                    </label>
                  </div>
                  <div class="item-date">26 jun 2017</div>
                </li>
                <li class="list-group-item todo-item" data-role="task">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label todo-label" for="customCheck2">
                      <span class="todo-desc">Give Purchase report to</span>
                      <span class="badge badge-pill badge-info float-right">Yesterday</span>
                    </label>
                  </div>
                  <ul class="list-style-none assignedto">
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/3.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Priyanka"
                      >
                    </li>
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/4.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Selina"
                      >
                    </li>
                  </ul>
                </li>
                <li class="list-group-item todo-item" data-role="task">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label todo-label" for="customCheck3">
                      <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span>
                      <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                    </label>
                  </div>
                  <div class="item-date">26 jun 2017</div>
                </li>
                <li class="list-group-item todo-item" data-role="task">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label todo-label" for="customCheck4">
                      <span class="todo-desc">Give Purchase report to</span>
                      <span class="badge badge-pill badge-info float-right">Yesterday</span>
                    </label>
                  </div>
                  <ul class="list-style-none assignedto">
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/3.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Priyanka"
                      >
                    </li>
                    <li class="assignee">
                      <img
                        class="rounded-circle"
                        width="40"
                        src="/assets/admin/images/users/4.jpg"
                        alt="user"
                        data-toggle="tooltip"
                        data-placement="top"
                        title
                        data-original-title="Selina"
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h4 class="card-title m-b-0">News Updates</h4>
          </div>
          <ul class="list-style-none">
            <li class="d-flex no-block card-body">
              <i class="fa fa-check-circle w-30px m-t-5"></i>
              <div>
                <a
                  href="#"
                  class="m-b-0 font-medium p-0"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
              </div>
              <div class="ml-auto">
                <div class="tetx-right">
                  <h5 class="text-muted m-b-0">20</h5>
                  <span class="text-muted font-16">Jan</span>
                </div>
              </div>
            </li>
            <li class="d-flex no-block card-body border-top">
              <i class="fa fa-gift w-30px m-t-5"></i>
              <div>
                <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                <span class="text-muted">many many happy returns of the day</span>
              </div>
              <div class="ml-auto">
                <div class="tetx-right">
                  <h5 class="text-muted m-b-0">11</h5>
                  <span class="text-muted font-16">Jan</span>
                </div>
              </div>
            </li>
            <li class="d-flex no-block card-body border-top">
              <i class="fa fa-plus w-30px m-t-5"></i>
              <div>
                <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                <span class="text-muted">But already everything was solved. It will ...</span>
              </div>
              <div class="ml-auto">
                <div class="tetx-right">
                  <h5 class="text-muted m-b-0">19</h5>
                  <span class="text-muted font-16">Jan</span>
                </div>
              </div>
            </li>
            <li class="d-flex no-block card-body border-top">
              <i class="fa fa-leaf w-30px m-t-5"></i>
              <div>
                <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                <span class="text-muted">i am very happy to approved by TF</span>
              </div>
              <div class="ml-auto">
                <div class="tetx-right">
                  <h5 class="text-muted m-b-0">20</h5>
                  <span class="text-muted font-16">Jan</span>
                </div>
              </div>
            </li>
            <li class="d-flex no-block card-body border-top">
              <i class="fa fa-question-circle w-30px m-t-5"></i>
              <div>
                <a href="#" class="m-b-0 font-medium p-0">I am alwayse here if you have any question</a>
                <span class="text-muted">we glad that you choose our template</span>
              </div>
              <div class="ml-auto">
                <div class="tetx-right">
                  <h5 class="text-muted m-b-0">15</h5>
                  <span class="text-muted font-16">Jan</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- column -->

      <div class="col-lg-6">
        <!-- Card -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Chat Option</h4>
            <div class="chat-box scrollable" style="height:475px;">
              <!--chat Row -->
              <ul class="chat-list">
                <!--chat Row -->
                <li class="chat-item">
                  <div class="chat-img">
                    <img src="/assets/admin/images/users/1.jpg" alt="user">
                  </div>
                  <div class="chat-content">
                    <h6 class="font-medium">James Anderson</h6>
                    <div
                      class="box bg-light-info"
                    >Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                  </div>
                  <div class="chat-time">10:56 am</div>
                </li>
                <!--chat Row -->
                <li class="chat-item">
                  <div class="chat-img">
                    <img src="/assets/admin/images/users/2.jpg" alt="user">
                  </div>
                  <div class="chat-content">
                    <h6 class="font-medium">Bianca Doe</h6>
                    <div class="box bg-light-info">It’s Great opportunity to work.</div>
                  </div>
                  <div class="chat-time">10:57 am</div>
                </li>
                <!--chat Row -->
                <li class="odd chat-item">
                  <div class="chat-content">
                    <div class="box bg-light-inverse">I would love to join the team.</div>
                    <br>
                  </div>
                </li>
                <!--chat Row -->
                <li class="odd chat-item">
                  <div class="chat-content">
                    <div class="box bg-light-inverse">Whats budget of the new project.</div>
                    <br>
                  </div>
                  <div class="chat-time">10:59 am</div>
                </li>
                <!--chat Row -->
                <li class="chat-item">
                  <div class="chat-img">
                    <img src="/assets/admin/images/users/3.jpg" alt="user">
                  </div>
                  <div class="chat-content">
                    <h6 class="font-medium">Angelina Rhodes</h6>
                    <div class="box bg-light-info">Well we have good budget for the project</div>
                  </div>
                  <div class="chat-time">11:00 am</div>
                </li>
                <!--chat Row -->
              </ul>
            </div>
          </div>
          <div class="card-body border-top">
            <div class="row">
              <div class="col-9">
                <div class="input-field m-t-0 m-b-0">
                  <textarea
                    id="textarea1"
                    placeholder="Type and enter"
                    class="form-control border-0"
                  ></textarea>
                </div>
              </div>
              <div class="col-3">
                <a
                  class="btn-circle btn-lg btn-cyan float-right text-white"
                  href="javascript:void(0)"
                >
                  <i class="fas fa-paper-plane"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Our partner (Box with Fix height)</h4>
          </div>
          <div class="comment-widgets scrollable" style="max-height: 130px;">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/1.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text w-100">
                <h6 class="font-medium">James Anderson</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">April 14, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/4.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text active w-100">
                <h6 class="font-medium">Michael Jorden</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">May 10, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
              <div class="p-2">
                <img
                  src="/assets/admin/images/users/5.jpg"
                  alt="user"
                  width="50"
                  class="rounded-circle"
                >
              </div>
              <div class="comment-text w-100">
                <h6 class="font-medium">Johnathan Doeting</h6>
                <span
                  class="m-b-15 d-block"
                >Lorem Ipsum is simply dummy text of the printing and type setting industry.</span>
                <div class="comment-footer">
                  <span class="text-muted float-right">August 1, 2016</span>
                  <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                  <button type="button" class="btn btn-success btn-sm">Publish</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Dashboard Component mounted.");
  }
};
</script>
