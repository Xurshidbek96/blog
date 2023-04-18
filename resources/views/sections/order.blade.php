
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <p class="section-title pr-5"><span class="pr-2">O'rindiqni buyurtma qiling</span></p>
                <h1 class="mb-4">Bolangiz uchun joyni buyurtma qiling</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline m-0">
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
                <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">O'rindiqni buyurtma qiling</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control border-0 p-4" placeholder="Ismingiz" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control border-0 p-4" placeholder="Telefon raqamingiz" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="email" required="required" />
                                {{-- <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Sinfni tanlang</option>
                                    <option value="1">Group Bugirsoq</option>
                                    <option value="2">Group Alpomish</option>
                                    <option value="3">Group Profesor</option>
                                </select> --}}
                            </div>
                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Yuborish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

