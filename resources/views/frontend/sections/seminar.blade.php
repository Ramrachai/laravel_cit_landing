    <!--============== Seminar Part Goes Here ================-->
    <section id="seminar" class="mt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            Upcoming Seminar Schedule
                        </div>
                        <div class="card-body text-center">
                            <div class="table-responsive seminar-table seminar-modal">
                                <table class="table table-striped mt-3 table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Responsive Web Design (3 Days Workshop)</td>
                                            <td>16 Apr 2021, Friday</td>
                                            <td>6:00 PM</td>
                                            <td>
                                                <button type="button" class="btn" data-toggle="modal"
                                                    data-target="#joinSeminars">Join</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Modal -->
    <div class="modal fade" id="joinSeminars" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Join Our Free Seminars</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <form id="seminar_leed">
                        <input type="hidden" name="_token" value="zSltvkU8JxpeOnAfBWBIBNwJoV1tMG8EyiXlXQJC">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" name="name" value="" class="form-control"
                                    placeholder="Enter Your Name*">
                                <p class="text-danger name_err"></p>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="email" value="" class="form-control"
                                    placeholder="Enter Your Email*">
                                <p class="text-danger email_err"></p>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="number" name="number" value="" class="form-control"
                                    placeholder="Enter Your Number*">
                                <p class="text-danger number_err"></p>
                            </div>
                            <div class="form-group col-sm-6">
                                <select class="form-control" name="seminar_cat" id="seminar_cat">
                                    <option>Select Topic</option>
                                    <option value="1">Responsive Web Design (3 Days Workshop)</option>
                                </select>
                                <p class="text-danger seminar_cat_err"></p>
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea name="address" class="form-control"
                                    placeholder="Enter your address"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-danger btn_submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="success_modal" style="z-index: 9999;">
        <div class="modal-dialog">
            <div class="modal-body bg-success">
                <p class="text-white">Seminar Registration Successful!</p>
            </div>
        </div>
    </div>