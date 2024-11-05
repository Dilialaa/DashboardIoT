@extends('main')


@section('content')
         <!-- ==========================API============================ -->
         <div class="api flex flex-col m-lg-5">
            <div class="title-api p-1 pb-2">
                <h5>API Key</h5>
            </div>

            <div class="input-wrapper pt-2">
                <input class="input-text" type="text" placeholder="Input Your API here">
                <button class="submit"> Submit</button>
            </div>
        </div>


        <!-- =====================================FEATURES AND RULE======================= -->
        <div class="details flex flex-row m-lg-5">
                    <div class="rule">
                        <div class="cardHeader">
                            <h4>Just Found 5 Feature(s)</h4>
                            <p>Choose features dimension to create visualization</p>
                        </div>

                        <div class="checkbox p-0 m-0">  
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            
                        </div>  
                    </div>

                    <!-- ================= Features ================ -->
                    <div class="features">
                        <div class="cardHeader">
                            <h4>Insert Rule</h4>
                        </div> 
                    </div>
        </div>
    </div>
    </div>
@endsection
