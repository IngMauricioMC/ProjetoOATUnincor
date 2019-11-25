import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then(m => m.HomePageModule)
  },
  { path: 'about', loadChildren: './about/about.module#AboutPageModule' },
  { path: 'intercambio-inter', loadChildren: './intercambio-inter/intercambio-inter.module#IntercambioInterPageModule' },
  { path: 'experiencias', loadChildren: './experiencias/experiencias.module#ExperienciasPageModule' },
  { path: 'inscripcoes', loadChildren: './inscripcoes/inscripcoes.module#InscripcoesPageModule' },
  { path: 'convenios', loadChildren: './convenios/convenios.module#ConveniosPageModule' },
  { path: 'modal', loadChildren: './modal/modal.module#ModalPageModule' },
  { path: 'login', loadChildren: './login/login.module#LoginPageModule' },
  { path: 'pag-admin', loadChildren: './pag-admin/pag-admin.module#PagAdminPageModule' },
  { path: 'nova-exp', loadChildren: './nova-exp/nova-exp.module#NovaExpPageModule' },
  { path: 'ver-exp', loadChildren: './ver-exp/ver-exp.module#VerExpPageModule' },
  { path: 'ver-conv', loadChildren: './ver-conv/ver-conv.module#VerConvPageModule' },
  { path: 'novo-conv', loadChildren: './novo-conv/novo-conv.module#NovoConvPageModule' }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
