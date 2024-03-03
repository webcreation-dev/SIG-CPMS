<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin.head')
  <body>
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    @livewire('notes-livewire-controller', ['classroom' => $classroom, 'ue' => $ue, 'type' => $type])

    
    @include("layouts.admin.footer")
</body>
</html>
