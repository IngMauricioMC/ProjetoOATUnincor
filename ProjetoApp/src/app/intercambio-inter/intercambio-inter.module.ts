import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { IntercambioInterPage } from './intercambio-inter.page';

const routes: Routes = [
  {
    path: '',
    component: IntercambioInterPage
  }
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RouterModule.forChild(routes)
  ],
  declarations: [IntercambioInterPage]
})
export class IntercambioInterPageModule {}
