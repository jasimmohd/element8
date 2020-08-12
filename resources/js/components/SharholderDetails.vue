<template>
    <div class="container">
        <div class="row pt-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Share Holders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal">
  Add New Share Holder
</button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Share Holder</th>
                  <th>Mobile</th>
                  <th>Status</th>
                  <th>Paid Amount</th>
                  <th>Balance Payment</th>
                  <th>Payment</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Data from data base</td>
                      <td>Data from data base</td>
                      <td>Data from data base</td>
                      <td>Data from data base</td>
                      <td>Data from data base</td>
                      <td>button</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
             <div class="form-group">
                <input
                      v-model="form.name"
                      type="text"
                      name="name"
                      placeholder="Share Holder Name"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('name') }"
                    />
                    <has-error :form="form" field="name"></has-error>
              </div>
              <div class="form-group">
                <select name="office_staff" v-modal="form.office_staff" id="office_staff" class="form-control" :class="{ 'is-invalid': form.errors.has('office_staff') }">
                  <option value="">Assigned To/Users</option>
                  <option value"staff1">Staff One</option>
                  <option value"staff2">Staff Two</option>
                  <option value"staff3">Staff Three</option>
                </select>
              </div>

              <div class="form-group">
                <input
                      v-model="form.mobile"
                      type="text"
                      name="mobile"
                      placeholder="Mobile Number"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('mobile') }"
                    />
                    <has-error :form="form" field="mobile"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.unit"
                      type="text"
                      name="name"
                      placeholder="Unit"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('unit') }"
                    />
                    <has-error :form="form" field="unit"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.zone"
                      type="text"
                      name="name"
                      placeholder="Zone"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('zone') }"
                    />
                    <has-error :form="form" field="zone"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.country"
                      type="text"
                      name="name"
                      placeholder="Country"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('country') }"
                    />
                    <has-error :form="form" field="Country"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.native_address"
                      type="text"
                      name="name"
                      placeholder="Native Address"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('native_address') }"
                    />
                    <has-error :form="form" field="native_address"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.area"
                      type="text"
                      name="name"
                      placeholder="Area"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('area') }"
                    />
                    <has-error :form="form" field="area"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.emirates"
                      type="text"
                      name="name"
                      placeholder="Emirates"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('name') }"
                    />
                    <has-error :form="form" field="emirates"></has-error>
              </div>

              <div class="form-group">
                <input
                      v-model="form.current_address"
                      type="text"
                      name="name"
                      placeholder="Current Address"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('current_address') }"
                    />
                    <has-error :form="form" field="current_address"></has-error>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create</button>
          </div>
        </div>
    </div>
</div>



    </div>
</template>

<script>
    export default {
    data() {
        return {
          editmode: false,
          agents: {},
          // Create a new form instance
          form: new Form({
            id: "",
            name: "",
            mobile: "",
            due_date: "",
            paid_amount: "",
            bal_payment: "",
            office_staff: "",
            unit: "",
            zone: "",
            country: "",
            native_address: "",
            img: "",
            area: "",
            emirate: "",
            current_address: "", 
            email: "", 
            password: ""

          })
        }
      },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
