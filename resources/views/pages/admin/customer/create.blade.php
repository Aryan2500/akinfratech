 @extends('layout.' . $layoutfor)

 @section('main_section')
     {{ $layoutfor }}
     <div class="card mb-4">
         <div class="card-header">
             <h6 class="card-title mb-0">Create Customer</h6>
         </div>
         <div class="card-body">
             <form class="row g-3 maskking-form" id="userForm" method="post" action="{{ route('customer.store') }}">
                 @csrf
                 <input type="hidden" name="usertype_id" value=5>
                 @include('pages.admin.customer.form')
                 <button type="submit" style="width: 100px" class="btn btn-primary">Submit</button>
             </form>
         </div>
     </div>
 @endsection

 @push('scripts')
     <script src="{{ asset('assets/js/user-create-form-validator.js') }}"></script>
     <script>
         $(document).ready(function() {
             $("#sameAsPermanentAddress").change(function() {
                 if (this.checked) {
                     $address = $('#paddress').val();
                     $pin_code = $('#pin_code').val();
                     $city = $('#city').val();
                     $state = $('#state').val();

                     $('#corresAddress').val($address);
                     $('#corres_pin').val($pin_code);
                     $('#corres_city').val($city);
                     $('#corres_state').val($state);
                 }
             });
         });
     </script>
 @endpush
