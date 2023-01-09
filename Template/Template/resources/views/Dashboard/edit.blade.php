@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Data With API</title>
@endsection
@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Data Buku</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('dashboardupdate',$data['id']) }}" method='POST'>
            @csrf
            @method("put")
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Nama Lengkap</label>
                    <input id="nama_mahasiswa" type="text" class="form-control w-full" name="nama_mahasiswa" 
                    value="{{ $data['nama_mahasiswa'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Prodi Tujuan</label>
                    <input id="prodi_tujuan" type="text" class="form-control w-full" name="prodi_tujuan" 
                    value="{{ $data['prodi_tujuan'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Jenis Kelamin</label>
                    <input id="jenis_kelamin" type="text" class="form-control w-full" name="jenis_kelamin" 
                    value="{{ $data['jenis_kelamin'] }}" >
                </div>

                <div>
                    <label for="crud-form-1" class="form-label">Tempat Lahir</label>
                    <input id="tempat_lahir" type="text" class="form-control w-full" name="tempat_lahir" 
                    value="{{ $data['tempat_lahir'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Tanggal Lahir</label>
                    <input id="tanggal_lahir" type="text" class="form-control w-full" name="tanggal_lahir" 
                    value="{{ $data['tanggal_lahir'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Agama</label>
                    <input id="agama" type="text" class="form-control w-full" name="agama" 
                    value="{{ $data['agama'] }}" >
                </div>

                <div>
                    <label for="crud-form-1" class="form-label">Alamat</label>
                    <input id="alamat_mahasiswa" type="text" class="form-control w-full" name="alamat_mahasiswa" 
                    value="{{ $data['tempat_lahir'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">No Telepon</label>
                    <input id="no_telepon" type="text" class="form-control w-full" name="no_telepon" 
                    value="{{ $data['no_telepon'] }}" >
                </div>
                <div class="mt-3">
                <div>
                    <label for="crud-form-1" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control w-full" name="email" 
                    value="{{ $data['email'] }}" >
                </div>
                <div class="mt-3">
                <div class="text-right mt-5">
                    <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
