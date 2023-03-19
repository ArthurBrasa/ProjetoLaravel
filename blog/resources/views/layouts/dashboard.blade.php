<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item d-flex p-1 ">
              <a class="nav-link active d-flex p-1" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                
              </a>
              <span class="nav-link">
                Dashboard
              </span>
            </li>

          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            {{--  --}}
            <li class="nav-item d-flex  align-items-center">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                
              </a>
              <span class="nav-link" style="font-size: 14px">
                Current month
              </span>
            </li>
        
          </ul>
        </div>
      </nav>

  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
  
        @livewire('update-articles')
  
        <h2>Suas Postagens</h2>
        <style>
            table{
                table-layout: fixed;
            }
        </style>
        <div class="table-responsive">
          <table class="table table-striped table-sm" >
            <thead >
              <tr>
                <th style="width: 80px" scope="col">#</th>
                @role('Super-Admin')
                  <th>Autor</th>
                @endrole
                @role('admin')
                  <th>Autor</th>
                @endrole
                <th style="width: 400px;" scope="col">Title</th>
                <th scope="col">Postagem</th>
                <th colspan="2" class="text-center" scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
           
          @livewire('minhas-postagens')
          {{-- @livewire('minhas-postagens', ['user' => {{}}], key($user->id)) --}}

            </tbody>
          </table>
        </div>

       
      
      </main>
    </div>
  </div>

