<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form  method="POST" action="{{route('flower.store')}}">
                    @csrf
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="text" name="tipology" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                    
                    </div>
                    
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
</x-layout>