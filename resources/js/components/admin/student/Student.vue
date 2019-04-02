<template>
  <div class="row">
    <!-- column -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body" style="display:inherit">
          <!-- <div class="row"> -->
          <h5 class="card-title m-b-0">Users Listing</h5>
          <router-link :to="{ name: 'CreateStudent' }">
            <a class="btn btn-primary btn-sm" href aria-expanded="false">Add New Student</a>
          </router-link>
          <!-- </div> -->
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="customtable">
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.0</td>
                <td>Win 95+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.0</td>
                <td>Win 95+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td>Win 95+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td>Win 98+</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
     
<script>
export default {
  // Our Javascript logic
};
</script>