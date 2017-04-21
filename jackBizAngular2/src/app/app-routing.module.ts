import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


import { AboutComponent } from './about/about.component';
import { HomeComponent } from './home/home.component';
import { AwardsComponent } from './awards/awards.component';
import { ContactComponent } from './contact/contact.component';
import { TestimonialsComponent } from './testimonials/testimonials.component';
import { BiomedicalComponent} from './expertise/biomedical/biomedical.component'
import { CompositeComponent} from './expertise/composite/composite.component'
import { StructureComponent} from './expertise/structure/structure.component'
import { ProposalComponent} from './expertise/proposal/proposal.component'

const routes: Routes = [
    {
        path: '',   redirectTo: '/home', pathMatch: 'full'
    },
    {
        path: 'home', component: HomeComponent,
        data: {
            meta: {
                title: 'Home page',
                description: 'Description of the home page'
            }
        }
    },
    {
        path: 'about', component: AboutComponent
    },
    {
        path: 'awards', component: AwardsComponent
    },
    {
        path: 'contact', component: ContactComponent
    },
    {
        path: 'testimonials', component: TestimonialsComponent
    },
    {
        path: 'structure', component: StructureComponent
    },
    {
        path: 'composite', component: CompositeComponent
    },
    {
        path: 'biomedical', component: BiomedicalComponent
    },
    {
        path: 'proposal', component: ProposalComponent
    }


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
  providers: []
})
export class AppRoutingModule { }
