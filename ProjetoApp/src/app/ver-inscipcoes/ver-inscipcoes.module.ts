import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { VerInscipcoesPage } from './ver-inscipcoes.page';

const routes: Routes = [
  {
    path: '',
    component: VerInscipcoesPage
  }
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RouterModule.forChild(routes)
  ],
  declarations: [VerInscipcoesPage]
})
export class VerInscipcoesPageModule {}
