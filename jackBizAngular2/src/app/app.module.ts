import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';
import {FormsModule} from '@angular/forms';
import {HttpModule} from '@angular/http';
import {AppRoutingModule} from './app-routing.module';
import {CarouselModule} from 'ng2-bootstrap';
import {ModalModule} from 'ng2-bootstrap';
import {ReactiveFormsModule} from '@angular/forms';  // <-- #1 import module for forms
//import { HashLocationStrategy, LocationStrategy } from '@angular/common';

import {AppComponent} from './app.component';
import {AboutComponent} from './about/about.component';
import {AwardsComponent} from './awards/awards.component';
import {ContactComponent} from './contact/contact.component';
import {HomeComponent} from './home/home.component';
import {TestimonialsComponent} from './testimonials/testimonials.component';
import {StructureComponent} from './expertise/structure/structure.component';
import {BiomedicalComponent} from './expertise/biomedical/biomedical.component';
import {CompositeComponent} from './expertise/composite/composite.component';
import {ProposalComponent} from './expertise/proposal/proposal.component';


@NgModule({
    declarations: [
        AppComponent,
        AboutComponent,
        AwardsComponent,
        ContactComponent,
        HomeComponent,
        TestimonialsComponent,
        StructureComponent,
        BiomedicalComponent,
        CompositeComponent,
        ProposalComponent
    ],
    imports: [
        BrowserModule,
        FormsModule,
        HttpModule,
        AppRoutingModule,
        CarouselModule.forRoot(),
        ModalModule.forRoot(),
        ReactiveFormsModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})

// {provide: LocationStrategy, useClass: HashLocationStrategy}
export class AppModule {
}
