<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addUserModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="add-alert"></div>
                <form id="add-form">
                    <div class="mb-3">
                        <label for="name-add" class="form-label">Name</label>
                        <input type="text" id="name-add" class="form-control" placeholder="Name!">
                    </div>

                    <div class="mb-3">
                        <label for="email-add" class="form-label">Email</label>
                        <input type="email" id="email-add" class="form-control" placeholder="Email!">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editUserModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="edit-alert"></div>
                <form id="edit-form">
                    <div class="mb-3">
                        <label for="name-edit" class="form-label">Name</label>
                        <input type="text" id="name-edit" class="form-control" placeholder="Name!">
                    </div>

                    <div class="mb-3">
                        <label for="email-edit" class="form-label">Email</label>
                        <input type="email" id="email-edit" class="form-control" placeholder="Email!">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete User Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="delete-form">
                    Are you sure, you want to delete this?
                    <div class="mt-3">
                        <input type="submit" value="Yes" class="btn btn-outline-danger">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>