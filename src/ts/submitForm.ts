export type TCustomFormEvent = SubmitEvent & {
  target: {
    wpcf7: {
      id: number;
      locale: string;
      status: string;
    }
  }
}

function submitForm (e: TCustomFormEvent) {

  setTimeout( () => {
    const response: HTMLElement | null = document.querySelector( '.response' );
    const container: HTMLElement | null = document.querySelector( 'form' );
    const contactFormTitle: HTMLElement |null = document.querySelector('.contact-form-title');
    if (e.target.wpcf7.status === "sent") {
      response!.style.display = "flex";
      contactFormTitle!.style.display = "none";
      container!.style.display = "none";
    }
  }, 800 )
}

export { submitForm };
