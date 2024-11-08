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
        <div class="cardHeader2">
            <h4>Insert Rule-Based</h4>
        </div>

        <!-- Tab Section -->
        <div class="tabs">
            <button class="tab-button active" onclick="openTab(event, 'formula')">Add Formula</button>
            <button class="tab-button" onclick="openTab(event, 'threshold')">Add Threshold</button>
        </div>

        <!-- Content Sections for Tabs -->
        <div id="formula" class="tab-content active">
            <h5>Formula</h5>

            <!-- Formula Input Area -->
            <div class="formula-input">
                <input type="text" placeholder="Feature 1 * (feature 2 * (2.1 + 3)) - 8 / feature 3" />
            </div>

            <!-- Feature List and Operators -->
            <div class="formula-container">
                <!-- Feature List -->
                <div class="feature-list">
                    <div class="feature-item">Feature 1</div>
                    <div class="feature-item">Feature 2</div>
                    <div class="feature-item">Feature 3</div>
                    <div class="feature-item">Feature 4</div>
                    <div class="feature-item">Feature 5</div>
                    <div class="feature-item">Feature 6</div>
                </div>

                <!-- Operators -->
                <div class="operators">
                    <button class="operator-button">*</button>
                    <button class="operator-button">+</button>
                    <button class="operator-button">/</button>
                    <button class="operator-button">-</button>
                    <button class="operator-button">( )</button>
                </div>
            </div>

            <!-- Save Button -->
            <button class="save-button">Save ></button>
        </div>


        <div id="threshold" class="tab-content">
            <h5>Threshold</h5>
            <div class="threshold-settings">
                <label for="feature">If</label>
                <div class="dropdown-container">
                    <select class="dropdown-select">
                        <option>Feature</option>
                        <!-- Additional options can be added here -->
                    </select>
                </div>
                <div class="dropdown-container2">
                    <select class="dropdown-select2">
                        <option>Condition</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button class="indicator-button"><span>Insert Indicator</span></button>
                <button class="alert-button">Create Alert</button>
            </div>
            <button class="add-threshold-button">+ Add Threshold</button>
        </div>

        <button class="save-button">Save ></button>
    </div>

</div>
</div>
</div>
<script>
    function openTab(event, tabName) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
        });

        // Remove active class from all tab buttons
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('active');
        });

        // Show the selected tab and add active class to the button
        document.getElementById(tabName).classList.add('active');
        event.currentTarget.classList.add('active');
    }

</script>
@endsection
