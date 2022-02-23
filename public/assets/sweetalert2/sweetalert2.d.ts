declare module 'sweetalert2' {
  /**
   * A namespace inside the default function, containing utility function for controlling the currently-displayed
   * popup.
   *
<<<<<<< Updated upstream
   * Example:
   * ```
   * Swal.fire('Hey user!', 'You are the rockstar!', 'info');
   *
   * Swal.update({
   *   icon: 'success'
   * })
   * ```
   */
  namespace Swal {

    /**
     * Function to display a SweetAlert2 popup, with an object of options, all being optional.
     * See the `SweetAlertOptions` interface for the list of accepted fields and values.
     *
     * Example:
     * ```
     * Swal.fire({
     *   title: 'Auto close alert!',
     *   text: 'I will close in 2 seconds.',
     *   timer: 2000
     * })
     * ```
     */
    function fire<T = any>(options: SweetAlertOptions<T>): Promise<SweetAlertResult<Awaited<T>>>;

    /**
     * Function to display a simple SweetAlert2 popup.
     *
     * Example:
     * ```
     * Swal.fire('The Internet?', 'That thing is still around?', 'question');
     * ```
     */
    function fire<T = any>(title?: string, html?: string, icon?: SweetAlertIcon): Promise<SweetAlertResult<Awaited<T>>>;

    /**
     * Reuse configuration by creating a `Swal` instance.
     *
     * Example:
     * ```
     * const Toast = Swal.mixin({
     *   toast: true,
     *   position: 'top-end',
     *   timer: 3000,
     *   timerProgressBar: true
     * })
     * Toast.fire('Something interesting happened', '', 'info')
     * ```
     *
     * @param options the default options to set for this instance.
     */
    function mixin(options: SweetAlertOptions): typeof Swal;

    /**
     * Determines if a popup is shown.
=======
   * ex.
   *   import Swal from 'sweetalert2';
   *
   *   Swal.fire('Hey user!', 'I don\'t like you.', 'warning');
   *
   *   if(Swal.isVisible()) { // instant regret
   *     Swal.close();
   *   }
   */
  namespace Swal {
    /**
     * Function to display a simple SweetAlert2 popup.
     *
     * ex.
     *   import Swal from 'sweetalert2';
     *   Swal.fire('The Internet?', 'That thing is still around?', 'question');
     */
    function fire(title?: string, message?: string, icon?: SweetAlertIcon): Promise<SweetAlertResult>;

    /**
     * Function to display a SweetAlert2 popup, with an object of options, all being optional.
     * See the SweetAlertOptions interface for the list of accepted fields and values.
     *
     * ex.
     *   import Swal from 'sweetalert2';
     *   Swal.fire({
     *     title: 'Auto close alert!',
     *     text: 'I will close in 2 seconds.',
     *     timer: 2000
     *   })
     */
    function fire(options: SweetAlertOptions): Promise<SweetAlertResult>;

    /**
     * Reuse configuration by creating a Swal instance.
     *
     * @param options the default options to set for this instance.
     */
    function mixin(options?: SweetAlertOptions): typeof Swal;

    /**
     * Determines if a popup is shown.
     * Be aware that the library returns a trueish or falsy value, not a real boolean.
>>>>>>> Stashed changes
     */
    function isVisible(): boolean;

    /**
     * Updates popup options.
<<<<<<< Updated upstream
     * See the `SweetAlertOptions` interface for the list of accepted fields and values.
     *
     * Example:
     * ```
     * Swal.update({
     *   icon: 'error'
     * })
     * ```
     */
    function update(options: Pick<SweetAlertOptions, SweetAlertUpdatableParameters>): void;
=======
     * See the SweetAlertOptions interface for the list of accepted fields and values.
     *
     * ex.
     *   swal.update({
     *     icon: 'error'
     *   })
     */
    function update(options: SweetAlertOptions): void;
>>>>>>> Stashed changes

    /**
     * Closes the currently open SweetAlert2 popup programmatically.
     *
<<<<<<< Updated upstream
     * @param result The promise originally returned by `Swal.fire()` will be resolved with this value.
     *               If no object is given, the promise is resolved with an empty `SweetAlertResult` object.
=======
     * @param result The promise originally returned by {@link Swal.fire} will be resolved with this value.
     *               If no object is given, the promise is resolved with an empty ({}) {@link SweetAlertResult} object.
>>>>>>> Stashed changes
     */
    function close(result?: SweetAlertResult): void;

    /**
<<<<<<< Updated upstream
     * Gets the popup container which contains the backdrop and the popup itself.
     */
    function getContainer(): HTMLElement | null;

    /**
     * Gets the popup.
     */
    function getPopup(): HTMLElement | null;

    /**
     * Gets the popup title.
     */
    function getTitle(): HTMLElement | null;
=======
     * Gets the popup.
     */
    function getPopup(): HTMLElement;

    /**
     * Gets the popup title.
     */
    function getTitle(): HTMLElement;

    /**
     * Gets the popup header.
     */
    function getHeader(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets progress steps.
     */
<<<<<<< Updated upstream
    function getProgressSteps(): HTMLElement | null;

    /**
     * Gets the DOM element where the `html`/`text` parameter is rendered to.
     */
    function getHtmlContainer(): HTMLElement | null;
=======
    function getProgressSteps(): HTMLElement;

    /**
     * Gets the popup content.
     */
    function getContent(): HTMLElement;

    /**
     * Gets the DOM element where the html/text parameter is rendered to.
     */
    function getHtmlContainer(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets the image.
     */
<<<<<<< Updated upstream
    function getImage(): HTMLElement | null;
=======
    function getImage(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets the close button.
     */
<<<<<<< Updated upstream
    function getCloseButton(): HTMLButtonElement | null;

    /**
     * Gets the icon.
=======
    function getCloseButton(): HTMLElement;

    /**
     * Gets the current visible icon.
>>>>>>> Stashed changes
     */
    function getIcon(): HTMLElement | null;

    /**
<<<<<<< Updated upstream
     * Gets the "Confirm" button.
     */
    function getConfirmButton(): HTMLButtonElement | null;

    /**
     * Gets the "Deny" button.
     */
    function getDenyButton(): HTMLButtonElement | null;
=======
     * Gets all icons. The current visible icon will have `style="display: flex"`,
     * all other will be hidden by `style="display: none"`.
     */
    function getIcons(): HTMLElement[];

    /**
     * Gets the "Confirm" button.
     */
    function getConfirmButton(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets the "Cancel" button.
     */
<<<<<<< Updated upstream
    function getCancelButton(): HTMLButtonElement | null;
=======
    function getCancelButton(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets actions (buttons) wrapper.
     */
<<<<<<< Updated upstream
    function getActions(): HTMLElement | null;
=======
    function getActions(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets the popup footer.
     */
<<<<<<< Updated upstream
    function getFooter(): HTMLElement | null;

    /**
     * Gets the timer progress bar (see the `timerProgressBar` param).
     */
    function getTimerProgressBar(): HTMLElement | null;
=======
    function getFooter(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * Gets all focusable elements in the popup.
     */
<<<<<<< Updated upstream
    function getFocusableElements(): readonly HTMLElement[];
=======
    function getFocusableElements(): HTMLElement[];
>>>>>>> Stashed changes

    /**
     * Enables "Confirm" and "Cancel" buttons.
     */
    function enableButtons(): void;

    /**
     * Disables "Confirm" and "Cancel" buttons.
     */
    function disableButtons(): void;

    /**
<<<<<<< Updated upstream
     * Shows loader (spinner), this is useful with AJAX requests.
     *
     * By default the loader be shown instead of the "Confirm" button, but if you want
     * another button to be replaced with a loader, just pass it like this:
     * ```
     * Swal.showLoading(Swal.getDenyButton())
     * ```
     */
    function showLoading(buttonToReplace?: HTMLButtonElement): void;

    /**
     * Hides loader and shows back the button which was hidden by .showLoading()
=======
     * Disables buttons and show loader. This is useful with AJAX requests.
     */
    function showLoading(): void;

    /**
     * Enables buttons and hide loader.
>>>>>>> Stashed changes
     */
    function hideLoading(): void;

    /**
     * Determines if popup is in the loading state.
     */
    function isLoading(): boolean;

    /**
<<<<<<< Updated upstream
     * Clicks the "Confirm" button programmatically.
=======
     * Clicks the "Confirm"-button programmatically.
>>>>>>> Stashed changes
     */
    function clickConfirm(): void;

    /**
<<<<<<< Updated upstream
     * Clicks the "Deny" button programmatically.
     */
    function clickDeny(): void;

    /**
     * Clicks the "Cancel" button programmatically.
=======
     * Clicks the "Cancel"-button programmatically.
>>>>>>> Stashed changes
     */
    function clickCancel(): void;

    /**
     * Shows a validation message.
     *
     * @param validationMessage The validation message.
     */
    function showValidationMessage(validationMessage: string): void;

    /**
     * Hides validation message.
     */
    function resetValidationMessage(): void;

    /**
     * Gets the input DOM node, this method works with input parameter.
     */
<<<<<<< Updated upstream
    function getInput(): HTMLInputElement | null;
=======
    function getInput(): HTMLInputElement;
>>>>>>> Stashed changes

    /**
     * Disables the popup input. A disabled input element is unusable and un-clickable.
     */
    function disableInput(): void;

    /**
     * Enables the popup input.
     */
    function enableInput(): void;

    /**
     * Gets the validation message container.
     */
<<<<<<< Updated upstream
    function getValidationMessage(): HTMLElement | null;
=======
    function getValidationMessage(): HTMLElement;
>>>>>>> Stashed changes

    /**
     * If `timer` parameter is set, returns number of milliseconds of timer remained.
     * Otherwise, returns undefined.
     */
    function getTimerLeft(): number | undefined;

    /**
     * Stop timer. Returns number of milliseconds of timer remained.
<<<<<<< Updated upstream
     * If `timer` parameter isn't set, returns `undefined`.
=======
     * If `timer` parameter isn't set, returns undefined.
>>>>>>> Stashed changes
     */
    function stopTimer(): number | undefined;

    /**
     * Resume timer. Returns number of milliseconds of timer remained.
<<<<<<< Updated upstream
     * If `timer` parameter isn't set, returns `undefined`.
=======
     * If `timer` parameter isn't set, returns undefined.
>>>>>>> Stashed changes
     */
    function resumeTimer(): number | undefined;

    /**
     * Toggle timer. Returns number of milliseconds of timer remained.
<<<<<<< Updated upstream
     * If `timer` parameter isn't set, returns `undefined`.
=======
     * If `timer` parameter isn't set, returns undefined.
>>>>>>> Stashed changes
     */
    function toggleTimer(): number | undefined;

    /**
     * Check if timer is running. Returns true if timer is running,
     * and false is timer is paused / stopped.
<<<<<<< Updated upstream
     * If `timer` parameter isn't set, returns `undefined`.
=======
     * If `timer` parameter isn't set, returns undefined.
>>>>>>> Stashed changes
     */
    function isTimerRunning(): boolean | undefined;

    /**
     * Increase timer. Returns number of milliseconds of an updated timer.
<<<<<<< Updated upstream
     * If `timer` parameter isn't set, returns `undefined`.
=======
     * If `timer` parameter isn't set, returns undefined.
>>>>>>> Stashed changes
     *
     * @param n The number of milliseconds to add to the currect timer
     */
    function increaseTimer(n: number): number | undefined;

    /**
<<<<<<< Updated upstream
=======
     * Provide an array of SweetAlert2 parameters to show multiple popups, one popup after another.
     *
     * @param steps The steps' configuration.
     */
    function queue(steps: Array<SweetAlertOptions | string>): Promise<any>;

    /**
     * Gets the index of current popup in queue. When there's no active queue, null will be returned.
     */
    function getQueueStep(): string | null;

    /**
     * Inserts a popup in the queue.
     *
     * @param step  The step configuration (same object as in the Swal.fire() call).
     * @param index The index to insert the step at.
     *              By default a popup will be added to the end of a queue.
     */
    function insertQueueStep(step: SweetAlertOptions, index?: number): number;

    /**
     * Deletes the popup at the specified index in the queue.
     *
     * @param index The popup index in the queue.
     */
    function deleteQueueStep(index: number): void;

    /**
>>>>>>> Stashed changes
     * Determines if a given parameter name is valid.
     *
     * @param paramName The parameter to check
     */
<<<<<<< Updated upstream
    function isValidParameter(paramName: string): paramName is keyof SweetAlertOptions;

    /**
     * Determines if a given parameter name is valid for `Swal.update()` method.
     *
     * @param paramName The parameter to check
     */
    function isUpdatableParameter(paramName: string): paramName is SweetAlertUpdatableParameters;

    /**
     * Normalizes the arguments you can give to Swal.fire() in an object of type SweetAlertOptions.
     *
     * Example:
     * ```
     * Swal.argsToParams(['title', 'text']); //=> { title: 'title', text: 'text' }
     * Swal.argsToParams([{ title: 'title', text: 'text' }]); //=> { title: 'title', text: 'text' }
     * ```
     *
     * @param params The array of arguments to normalize.
     */
    function argsToParams<T>(params: SweetAlertArrayOptions | readonly [SweetAlertOptions<T>]): SweetAlertOptions<T>;
=======
    function isValidParameter(paramName: string): boolean;

    /**
     * Determines if a given parameter name is valid for Swal.update() method.
     *
     * @param paramName The parameter to check
     */
    function isUpdatableParameter(paramName: string): boolean;

    /**
     * Normalizes the arguments you can give to Swal.fire() in an object of type SweetAlertOptions.
     * ex:
     *     Swal.argsToParams(['title', 'text']); //=> { title: 'title', text: 'text' }
     *     Swal.argsToParams({ title: 'title', text: 'text' }); //=> { title: 'title', text: 'text' }
     *
     * @param params The array of arguments to normalize.
     */
    function argsToParams(params: SweetAlertArrayOptions | [SweetAlertOptions]): SweetAlertOptions;
>>>>>>> Stashed changes

    /**
     * An enum of possible reasons that can explain an alert dismissal.
     */
    enum DismissReason {
      cancel, backdrop, close, esc, timer
    }

    /**
     * SweetAlert2's version
     */
    const version: string
  }

<<<<<<< Updated upstream
  interface SweetAlertHideShowClass {
    backdrop?: string;
    icon?: string;
    popup?: string;
  }

  type Awaited<T> = T extends Promise<infer U> ? U : T;

  type SyncOrAsync<T> = T | Promise<T> | { toPromise: () => T };

  type ValueOrThunk<T> = T | (() => T);

  export type SweetAlertArrayOptions = readonly [string?, string?, SweetAlertIcon?];

  export type SweetAlertGrow = 'row' | 'column' | 'fullscreen' | false;

  export type SweetAlertHideClass = SweetAlertHideShowClass;

  export type SweetAlertShowClass = Readonly<SweetAlertHideShowClass>;

=======
>>>>>>> Stashed changes
  export type SweetAlertIcon = 'success' | 'error' | 'warning' | 'info' | 'question';

  export type SweetAlertInput =
    'text' | 'email' | 'password' | 'number' | 'tel' | 'range' | 'textarea' | 'select' | 'radio' | 'checkbox' |
    'file' | 'url';

  export type SweetAlertPosition =
    'top' | 'top-start' | 'top-end' | 'top-left' | 'top-right' |
    'center' | 'center-start' | 'center-end' | 'center-left' | 'center-right' |
    'bottom' | 'bottom-start' | 'bottom-end' | 'bottom-left' | 'bottom-right';

<<<<<<< Updated upstream
  export type SweetAlertUpdatableParameters =
    | 'allowEscapeKey'
    | 'allowOutsideClick'
    | 'buttonsStyling'
    | 'cancelButtonAriaLabel'
    | 'cancelButtonColor'
    | 'cancelButtonText'
    | 'closeButtonAriaLabel'
    | 'closeButtonHtml'
    | 'confirmButtonAriaLabel'
    | 'confirmButtonColor'
    | 'confirmButtonText'
    | 'currentProgressStep'
    | 'customClass'
    | 'denyButtonAriaLabel'
    | 'denyButtonColor'
    | 'denyButtonText'
    | 'didClose'
    | 'didDestroy'
    | 'footer'
    | 'hideClass'
    | 'html'
    | 'icon'
    | 'imageAlt'
    | 'imageHeight'
    | 'imageUrl'
    | 'imageWidth'
    | 'progressSteps'
    | 'reverseButtons'
    | 'showCancelButton'
    | 'showCloseButton'
    | 'showConfirmButton'
    | 'showDenyButton'
    | 'text'
    | 'title'
    | 'titleText'
    | 'willClose';
=======
  export type SweetAlertGrow = 'row' | 'column' | 'fullscreen' | false;

  export interface SweetAlertResult {
    value?: any;
    dismiss?: Swal.DismissReason;
  }

  export interface SweetAlertShowClass {
    popup?: string;
    backdrop?: string;
    icon?: string;
  }

  export interface SweetAlertHideClass {
    popup?: string;
    backdrop?: string;
    icon?: string;
  }
>>>>>>> Stashed changes

  export interface SweetAlertCustomClass {
    container?: string;
    popup?: string;
<<<<<<< Updated upstream
=======
    header?: string;
>>>>>>> Stashed changes
    title?: string;
    closeButton?: string;
    icon?: string;
    image?: string;
<<<<<<< Updated upstream
    htmlContainer?: string;
    input?: string;
    validationMessage?: string;
    actions?: string;
    confirmButton?: string;
    denyButton?: string;
    cancelButton?: string;
    loader?: string;
    footer?: string;
  }

  export interface SweetAlertResult<T = any> {
    readonly isConfirmed: boolean;
    readonly isDenied: boolean;
    readonly isDismissed: boolean;
    readonly value?: T;
    readonly dismiss?: Swal.DismissReason;
  }

  export interface SweetAlertOptions<PreConfirmResult = any, PreConfirmCallbackValue = any> {
    /**
     * The title of the popup, as HTML.
     * It can either be added to the object under the key `title` or passed as the first parameter of `Swal.fire()`.
=======
    content?: string;
    input?: string;
    actions?: string;
    confirmButton?: string;
    cancelButton?: string;
    footer?: string;
  }

  type SyncOrAsync<T> = T | Promise<T>;

  type ValueOrThunk<T> = T | (() => T);

  export type SweetAlertArrayOptions = [string?, string?, SweetAlertIcon?];

  export interface SweetAlertOptions {
    /**
     * The title of the popup, as HTML.
     * It can either be added to the object under the key "title" or passed as the first parameter of the function.
>>>>>>> Stashed changes
     *
     * @default ''
     */
    title?: string | HTMLElement | JQuery;

    /**
     * The title of the popup, as text. Useful to avoid HTML injection.
     *
     * @default ''
     */
    titleText?: string;

    /**
     * A description for the popup.
<<<<<<< Updated upstream
     * If `text` and `html` parameters are provided in the same time, `text` will be used.
=======
     * It can either be added to the object under the key "text" or passed as the second parameter of the function.
>>>>>>> Stashed changes
     *
     * @default ''
     */
    text?: string;

    /**
     * A HTML description for the popup.
<<<<<<< Updated upstream
     * It can either be added to the object under the key `html` or passed as the second parameter of `Swal.fire()`.
=======
     * If "text" and "html" parameters are provided in the same time, "text" will be used.
>>>>>>> Stashed changes
     *
     * @default ''
     */
    html?: string | HTMLElement | JQuery;

    /**
<<<<<<< Updated upstream
     * The icon of the popup.
     * SweetAlert2 comes with 5 built-in icons which will show a corresponding icon animation:
     * `'warning'`, `'error'`, `'success'`, `'info'` and `'question'`.
     * It can either be put to the object under the key `icon` or passed as the third parameter of `Swal.fire()`.
     *
     * @default undefined
     */
    icon?: SweetAlertIcon;

    /**
     * Use this to change the color of the icon.
     *
     * @default undefined
     */
    iconColor?: string;
=======
     * The footer of the popup, as HTML.
     *
     * @default ''
     */
    footer?: string | HTMLElement | JQuery;

    /**
     * The icon of the popup.
     * SweetAlert2 comes with 5 built-in icons which will show a corresponding icon animation: 'warning', 'error',
     * 'success', 'info' and 'question'.
     * It can either be put in the array under the key "icon" or passed as the third parameter of the function.
     *
     * @default undefined
     */
    icon?: SweetAlertIcon;
>>>>>>> Stashed changes

    /**
     * The custom HTML content for an icon.
     *
<<<<<<< Updated upstream
     * Example:
     * ```
     * Swal.fire({
     *   icon: 'error',
     *   iconHtml: '<i class="fas fa-bug"></i>'
     * })
     * ```
=======
     * ex.
     *   Swal.fire({
     *     icon: 'error',
     *     iconHtml: '<i class="fas fa-bug"></i>'
     *   })
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    iconHtml?: string;

    /**
<<<<<<< Updated upstream
     * The footer of the popup, as HTML.
     *
     * @default ''
     */
    footer?: string | HTMLElement | JQuery;

    /**
     * The declarative <template> of the popup. All API prams can be set via
     * `<swal-param name="..." value="..."></swal-param>`, e.g.
     * `<swal-param name="toast" value="true"></swal-param>`
     *
     * Additionally, there are specialized elements for specific params:
     *  - `<swal-title>`
     *  - `<swal-html>`
     *  - `<swal-icon>`
     *  - `<swal-image>`
     *  - `<swal-input>`
     *  - `<swal-input-option>`
     *  - `<swal-button>`
     *  - `<swal-footer>`
     *
     * Example:
     * ```html
     * <template id="my-template">
     *   <swal-title>Are you sure?</swal-title>
     *   <swal-html>You won't be able to revert this!</swal-html>
     *
     *   <swal-icon type="success"></swal-icon>
     *   <swal-image src="..." width="..." height="..." alt="..."></swal-image>
     *
     *   <swal-input type="select" placeholder="..." label="..." value="...">
     *     <swal-input-option value="...">...</swal-input-option>
     *   </swal-input>
     *   <swal-param name="inputAttributes" value='{ "multiple": true }'></swal-param>
     *
     *   <swal-button type="confirm" color="..." aria-label="...">Yes</swal-button>
     *   <swal-button type="cancel" color="..." aria-label="...">No</swal-button>
     *
     *   <swal-footer>read more here</swal-footer>
     * </template>
     * ```
     *
     * ```
     * Swal.fire({
     *   template: '#my-template'
     * })
     * ```
     *
     * @default undefined
     */
    template?: string | HTMLTemplateElement;

    /**
=======
>>>>>>> Stashed changes
     * Whether or not SweetAlert2 should show a full screen click-to-dismiss backdrop.
     * Either a boolean value or a css background value (hex, rgb, rgba, url, etc.)
     *
     * @default true
     */
    backdrop?: boolean | string;

    /**
     * Whether or not an alert should be treated as a toast notification.
<<<<<<< Updated upstream
     * This option is normally coupled with the `position` and `timer` parameters.
=======
     * This option is normally coupled with the `position` parameter and a timer.
>>>>>>> Stashed changes
     * Toasts are NEVER autofocused.
     *
     * @default false
     */
    toast?: boolean;

    /**
     * The container element for adding popup into (query selector only).
     *
     * @default 'body'
     */
    target?: string | HTMLElement;

    /**
<<<<<<< Updated upstream
     * Input field type, can be `'text'`, `'email'`, `'password'`, `'number'`, `'tel'`, `'range'`, `'textarea'`,
     * `'select'`, `'radio'`, `'checkbox'`, `'file'` and `'url'`.
=======
     * Input field type, can be text, email, password, number, tel, range, textarea, select, radio, checkbox, file
     * and url.
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    input?: SweetAlertInput;

    /**
<<<<<<< Updated upstream
     * Popup width, including paddings (`box-sizing: border-box`).
=======
     * Popup width, including paddings (box-sizing: border-box). Can be in px or %.
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    width?: number | string;

    /**
     * Popup padding.
     *
     * @default undefined
     */
    padding?: number | string;

    /**
<<<<<<< Updated upstream
     * Popup background (CSS `background` property).
=======
     * Popup background (CSS background property).
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    background?: string;

    /**
     * Popup position
     *
     * @default 'center'
     */
    position?: SweetAlertPosition;

    /**
     * Popup grow direction
     *
     * @default false
     */
    grow?: SweetAlertGrow;

    /**
     * CSS classes for animations when showing a popup (fade in)
<<<<<<< Updated upstream
     * @default { popup: 'swal2-show', backdrop: 'swal2-backdrop-show', icon: 'swal2-icon-show', }
=======
>>>>>>> Stashed changes
     */
    showClass?: SweetAlertShowClass;

    /**
     * CSS classes for animations when hiding a popup (fade out)
<<<<<<< Updated upstream
     * @default { popup: 'swal2-hide', backdrop: 'swal2-backdrop-hide', icon: 'swal2-icon-hide' }
=======
>>>>>>> Stashed changes
     */
    hideClass?: SweetAlertHideClass;

    /**
     * A custom CSS class for the popup.
     * If a string value is provided, the classname will be applied to the popup.
     * If an object is provided, the classnames will be applied to the corresponding fields:
     *
<<<<<<< Updated upstream
     * Example:
     * ```
     * Swal.fire({
     *   customClass: {
     *     container: '...',
     *     popup: '...',
     *     title: '...',
     *     closeButton: '...',
     *     icon: '...',
     *     image: '...',
     *     input: '...',
     *     inputLabel: '...',
     *     validationMessage: '...',
     *     actions: '...',
     *     confirmButton: '...',
     *     denyButton: '...',
     *     cancelButton: '...',
     *     loader: '...',
     *     footer: '...'
     *   }
     * })
     * ```
     *
     * @default {}
=======
     * ex.
     *   Swal.fire({
     *     customClass: {
     *       container: 'container-class',
     *       popup: 'popup-class',
     *       header: 'header-class',
     *       title: 'title-class',
     *       closeButton: 'close-button-class',
     *       icon: 'icon-class',
     *       image: 'image-class',
     *       content: 'content-class',
     *       input: 'input-class',
     *       actions: 'actions-class',
     *       confirmButton: 'confirm-button-class',
     *       cancelButton: 'cancel-button-class',
     *       footer: 'footer-class'
     *     }
     *   })
     *
     * @default undefined
>>>>>>> Stashed changes
     */
    customClass?: SweetAlertCustomClass;

    /**
     * Auto close timer of the popup. Set in ms (milliseconds).
     *
     * @default undefined
     */
    timer?: number;

    /**
<<<<<<< Updated upstream
     * If set to `true`, the timer will have a progress bar at the bottom of a popup.
=======
     * If set to true, the timer will have a progress bar at the bottom of a popup.
>>>>>>> Stashed changes
     * Mostly, this feature is useful with toasts.
     *
     * @default false
     */
    timerProgressBar?: boolean;

    /**
<<<<<<< Updated upstream
     * By default, SweetAlert2 sets html's and body's CSS `height` to `auto !important`.
     * If this behavior isn't compatible with your project's layout, set `heightAuto` to `false`.
=======
     * @deprecated
     * If set to false, popup CSS animation will be disabled.
     *
     * @default true
     */
    animation?: ValueOrThunk<boolean>;

    /**
     * By default, SweetAlert2 sets html's and body's CSS height to auto !important.
     * If this behavior isn't compatible with your project's layout, set heightAuto to false.
>>>>>>> Stashed changes
     *
     * @default true
     */
    heightAuto?: boolean;

    /**
<<<<<<< Updated upstream
     * If set to `false`, the user can't dismiss the popup by clicking outside it.
=======
     * If set to false, the user can't dismiss the popup by clicking outside it.
>>>>>>> Stashed changes
     * You can also pass a custom function returning a boolean value, e.g. if you want
     * to disable outside clicks for the loading state of a popup.
     *
     * @default true
     */
    allowOutsideClick?: ValueOrThunk<boolean>;

    /**
<<<<<<< Updated upstream
     * If set to `false`, the user can't dismiss the popup by pressing the Escape key.
=======
     * If set to false, the user can't dismiss the popup by pressing the Escape key.
>>>>>>> Stashed changes
     * You can also pass a custom function returning a boolean value, e.g. if you want
     * to disable the escape key for the loading state of a popup.
     *
     * @default true
     */
    allowEscapeKey?: ValueOrThunk<boolean>;

    /**
<<<<<<< Updated upstream
     * If set to `false`, the user can't confirm the popup by pressing the Enter or Space keys,
=======
     * If set to false, the user can't confirm the popup by pressing the Enter or Space keys,
>>>>>>> Stashed changes
     * unless they manually focus the confirm button.
     * You can also pass a custom function returning a boolean value.
     *
     * @default true
     */
    allowEnterKey?: ValueOrThunk<boolean>;

    /**
<<<<<<< Updated upstream
     * If set to `false`, SweetAlert2 will allow keydown events propagation to the document.
=======
     * If set to false, SweetAlert2 will allow keydown events propagation to the document.
>>>>>>> Stashed changes
     *
     * @default true
     */
    stopKeydownPropagation?: boolean;

    /**
     * Useful for those who are using SweetAlert2 along with Bootstrap modals.
<<<<<<< Updated upstream
     * By default keydownListenerCapture is `false` which means when a user hits `Esc`,
     * both SweetAlert2 and Bootstrap modals will be closed.
     * Set `keydownListenerCapture` to `true` to fix that behavior.
=======
     * By default keydownListenerCapture is false which means when a user hits Esc,
     * both SweetAlert2 and Bootstrap modals will be closed.
     * Set keydownListenerCapture to true to fix that behavior.
>>>>>>> Stashed changes
     *
     * @default false
     */
    keydownListenerCapture?: boolean;

    /**
<<<<<<< Updated upstream
     * If set to `false`, the "Confirm" button will not be shown.
=======
     * If set to false, a "Confirm"-button will not be shown.
>>>>>>> Stashed changes
     * It can be useful when you're using custom HTML description.
     *
     * @default true
     */
    showConfirmButton?: boolean;

    /**
<<<<<<< Updated upstream
     * If set to `true`, the "Deny" button will be shown, which the user can click on to deny the popup.
     *
     * @default false
     */
    showDenyButton?: boolean;

    /**
     * If set to `true`, the "Cancel" button will be shown, which the user can click on to dismiss the popup.
=======
     * If set to true, a "Cancel"-button will be shown, which the user can click on to dismiss the popup.
>>>>>>> Stashed changes
     *
     * @default false
     */
    showCancelButton?: boolean;

    /**
<<<<<<< Updated upstream
     * Use this to change the text on the "Confirm" button.
=======
     * Use this to change the text on the "Confirm"-button.
>>>>>>> Stashed changes
     *
     * @default 'OK'
     */
    confirmButtonText?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the text on the "Confirm" button.
     *
     * @default 'No'
     */
    denyButtonText?: string;

    /**
     * Use this to change the text on the "Cancel" button.
=======
     * Use this to change the text on the "Cancel"-button.
>>>>>>> Stashed changes
     *
     * @default 'Cancel'
     */
    cancelButtonText?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the background color of the "Confirm" button.
=======
     * Use this to change the background color of the "Confirm"-button (must be a HEX value).
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    confirmButtonColor?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the background color of the "Deny" button.
     *
     * @default undefined
     */
    denyButtonColor?: string;

    /**
     * Use this to change the background color of the "Cancel" button.
=======
     * Use this to change the background color of the "Cancel"-button (must be a HEX value).
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    cancelButtonColor?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the `aria-label` for the "Confirm" button.
=======
     * Use this to change the aria-label for the "Confirm"-button.
>>>>>>> Stashed changes
     *
     * @default ''
     */
    confirmButtonAriaLabel?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the `aria-label` for the "Deny" button.
     *
     * @default ''
     */
    denyButtonAriaLabel?: string;

    /**
     * Use this to change the `aria-label` for the "Cancel" button.
=======
     * Use this to change the aria-label for the "Cancel"-button.
>>>>>>> Stashed changes
     *
     * @default ''
     */
    cancelButtonAriaLabel?: string;

    /**
     * Whether to apply the default SweetAlert2 styling to buttons.
<<<<<<< Updated upstream
     * If you want to use your own classes (e.g. Bootstrap classes) set this parameter to `false`.
=======
     * If you want to use your own classes (e.g. Bootstrap classes) set this parameter to false.
>>>>>>> Stashed changes
     *
     * @default true
     */
    buttonsStyling?: boolean;

    /**
<<<<<<< Updated upstream
     * Set to `true` if you want to invert default buttons positions.
=======
     * Set to true if you want to invert default buttons positions.
>>>>>>> Stashed changes
     *
     * @default false
     */
    reverseButtons?: boolean;

    /**
<<<<<<< Updated upstream
     * Set to `false` if you want to focus the first element in tab order instead of the "Confirm" button by default.
=======
     * Set to false if you want to focus the first element in tab order instead of "Confirm"-button by default.
>>>>>>> Stashed changes
     *
     * @default true
     */
    focusConfirm?: boolean;

    /**
<<<<<<< Updated upstream
     * Set to `true` if you want to focus the "Deny" button by default.
     *
     * @default false
     */
    focusDeny?: boolean;

    /**
     * Set to `true` if you want to focus the "Cancel" button by default.
=======
     * Set to true if you want to focus the "Cancel"-button by default.
>>>>>>> Stashed changes
     *
     * @default false
     */
    focusCancel?: boolean;

    /**
<<<<<<< Updated upstream
     * Set to `false` if you don't want to return the focus to the element that invoked the modal
     * after the modal is closed.
     *
     * @default true
     */
    returnFocus?: boolean;

    /**
     * Set to `true` to show close button.
=======
     * Set to true to show close button.
>>>>>>> Stashed changes
     *
     * @default false
     */
    showCloseButton?: boolean;

    /**
<<<<<<< Updated upstream
     * Use this to change the HTML content of the close button.
=======
     * Use this to change the content of the close button.
>>>>>>> Stashed changes
     *
     * @default '&times;'
     */
    closeButtonHtml?: string;

    /**
     * Use this to change the `aria-label` for the close button.
     *
     * @default 'Close this dialog'
     */
    closeButtonAriaLabel?: string;

    /**
<<<<<<< Updated upstream
     * Use this to change the HTML content of the loader.
     *
     * @default ''
     */
    loaderHtml?: string;

    /**
     * Set to `true` to disable buttons and show the loader instead of the Confirm button.
     * Use it in combination with the `preConfirm` parameter.
=======
     * Set to true to disable buttons and show that something is loading. Useful for AJAX requests.
>>>>>>> Stashed changes
     *
     * @default false
     */
    showLoaderOnConfirm?: boolean;

    /**
<<<<<<< Updated upstream
     * Set to `true` to disable buttons and show the loader instead of the Deny button.
     * Use it in combination with the `preDeny` parameter.
     *
     * @default false
     */
    showLoaderOnDeny?: boolean;

    /**
     * Function to execute before confirming, may be async (Promise-returning) or sync.
     * Returned (or resolved) value can be:
     *  - `false` to prevent a popup from closing
     *  - anything else to pass that value as the `result.value` of `Swal.fire()`
     *  - `undefined` to keep the default `result.value`
     *
     * Example:
     * ```
     * Swal.fire({
     *   title: 'Multiple inputs',
     *   html:
     *     '<input id="swal-input1" class="swal2-input">' +
     *     '<input id="swal-input2" class="swal2-input">',
     *   focusConfirm: false,
     *   preConfirm: () => [
     *     document.querySelector('#swal-input1').value,
     *     document.querySelector('#swal-input2').value
     *   ]
     * }).then(result => Swal.fire(JSON.stringify(result));
     * ```
     *
     * @default undefined
     */
    preConfirm?(inputValue: PreConfirmCallbackValue): PreConfirmResult;

    /**
     * Function to execute before denying, may be async (Promise-returning) or sync.
     * Returned (or resolved) value can be:
     *  - `false` to prevent a popup from closing
     *  - anything else to pass that value as the `result.value` of `Swal.fire()`
     *  - `undefined` to keep the default `result.value`
     *
     * @default undefined
     */
    preDeny?(value: any): SyncOrAsync<any | void>;
=======
     * Function to execute before confirm, may be async (Promise-returning) or sync.
     *
     * ex.
     *   Swal.fire({
     *    title: 'Multiple inputs',
     *    html:
     *      '<input id="swal-input1" class="swal2-input">' +
     *      '<input id="swal-input2" class="swal2-input">',
     *    focusConfirm: false,
     *    preConfirm: () => [
     *      document.querySelector('#swal-input1').value,
     *      document.querySelector('#swal-input2').value
     *    ]
     *  }).then(result => Swal.fire(JSON.stringify(result));
     *
     * @default undefined
     */
    preConfirm?(inputValue: any): SyncOrAsync<any | void>;
>>>>>>> Stashed changes

    /**
     * Add an image to the popup. Should contain a string with the path or URL to the image.
     *
     * @default undefined
     */
    imageUrl?: string;

    /**
<<<<<<< Updated upstream
     * If imageUrl is set, you can specify imageWidth to describes image width.
     *
     * @default undefined
     */
    imageWidth?: number | string;

    /**
     * If imageUrl is set, you can specify imageHeight to describes image height.
     *
     * @default undefined
     */
    imageHeight?: number | string;
=======
     * If imageUrl is set, you can specify imageWidth to describes image width in px.
     *
     * @default undefined
     */
    imageWidth?: number;

    /**
     * If imageUrl is set, you can specify imageHeight to describes image height in px.
     *
     * @default undefined
     */
    imageHeight?: number;
>>>>>>> Stashed changes

    /**
     * An alternative text for the custom image icon.
     *
     * @default ''
     */
    imageAlt?: string;

    /**
<<<<<<< Updated upstream
     * Input field label.
     *
     * @default ''
     */
    inputLabel?: string;

    /**
=======
>>>>>>> Stashed changes
     * Input field placeholder.
     *
     * @default ''
     */
    inputPlaceholder?: string;

    /**
     * Input field initial value.
     *
     * @default ''
     */
<<<<<<< Updated upstream
    inputValue?: SyncOrAsync<string | number | boolean>;

    /**
     * If the `input` parameter is set to `'select'` or `'radio'`, you can provide options.
     * Object keys will represent options values, object values will represent options text values.
     * @default {}
     */
    inputOptions?: SyncOrAsync<ReadonlyMap<string, string> | Record<string, any>>;

    /**
     * Automatically remove whitespaces from both ends of a result string.
     * Set this parameter to `false` to disable auto-trimming.
=======
    inputValue?: SyncOrAsync<string>;

    /**
     * If input parameter is set to "select" or "radio", you can provide options.
     * Object keys will represent options values, object values will represent options text values.
     */
    inputOptions?: SyncOrAsync<Map<string, string> | { [inputValue: string]: string }>;

    /**
     * Automatically remove whitespaces from both ends of a result string.
     * Set this parameter to false to disable auto-trimming.
>>>>>>> Stashed changes
     *
     * @default true
     */
    inputAutoTrim?: boolean;

    /**
<<<<<<< Updated upstream
     * HTML input attributes (e.g. `min`, `max`, `step`, `accept`), that are added to the input field.
     *
     * Example:
     * ```
     * Swal.fire({
     *   title: 'Select a file',
     *   input: 'file',
     *   inputAttributes: {
     *     accept: 'image/*'
     *   }
     * })
     * ```
     *
     * @default {}
     */
    inputAttributes?: Record<string, string>;
=======
     * HTML input attributes (e.g. min, max, step, accept...), that are added to the input field.
     *
     * ex.
     *   Swal.fire({
     *     title: 'Select a file',
     *     input: 'file',
     *     inputAttributes: {
     *       accept: 'image/*'
     *     }
     *   })
     *
     * @default undefined
     */
    inputAttributes?: { [attribute: string]: string };
>>>>>>> Stashed changes

    /**
     * Validator for input field, may be async (Promise-returning) or sync.
     *
<<<<<<< Updated upstream
     * Example:
     * ```
     * Swal.fire({
     *   title: 'Select color',
     *   input: 'radio',
     *   inputValidator: result => !result && 'You need to select something!'
     * })
     * ```
=======
     * ex.
     *   Swal.fire({
     *     title: 'Select color',
     *     input: 'radio',
     *     inputValidator: result => !result && 'You need to select something!'
     *   })
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    inputValidator?(inputValue: string): SyncOrAsync<string | null>;

    /**
<<<<<<< Updated upstream
     * If you want to return the input value as `result.value` when denying the popup, set to `true`.
     * Otherwise, the denying will set `result.value` to `false`.
     *
     * @default false
     */
    returnInputValueOnDeny?: boolean;

    /**
     * A custom validation message for default validators (email, url).
     *
     * Example:
     * ```
     * Swal.fire({
     *   input: 'email',
     *   validationMessage: 'Adresse e-mail invalide'
     * })
     * ```
=======
     * A custom validation message for default validators (email, url).
     *
     * ex.
     *   Swal.fire({
     *     input: 'email',
     *     validationMessage: 'Adresse e-mail invalide'
     *   })
>>>>>>> Stashed changes
     *
     * @default undefined
     */
    validationMessage?: string;

    /**
<<<<<<< Updated upstream
     * Progress steps, useful for popup queues.
     *
     * @default []
     */
    progressSteps?: readonly string[];
=======
     * Progress steps, useful for popup queues, see usage example.
     *
     * @default []
     */
    progressSteps?: string[];
>>>>>>> Stashed changes

    /**
     * Current active progress step.
     *
     * @default undefined
     */
    currentProgressStep?: string;

    /**
     * Distance between progress steps.
     *
     * @default undefined
     */
    progressStepsDistance?: string;

    /**
<<<<<<< Updated upstream
     * Popup lifecycle hook. Synchronously runs before the popup is shown on screen.
     *
     * @default undefined
     * @param popup The popup DOM element.
     */
    willOpen?(popup: HTMLElement): void;

    /**
     * Popup lifecycle hook. Asynchronously runs after the popup has been shown on screen.
     *
     * @default undefined
     * @param popup The popup DOM element.
     */
    didOpen?(popup: HTMLElement): void;

    /**
     * Popup lifecycle hook. Synchronously runs after the popup DOM has been updated (ie. just before the popup is
     * repainted on the screen).
     * Typically, this will happen after `Swal.fire()` or `Swal.update()`.
     * If you want to perform changes in the popup's DOM, that survive `Swal.update()`, prefer `didRender` over
     * `willOpen`.
     *
     * @default undefined
     * @param popup The popup DOM element.
     */
    didRender?(popup: HTMLElement): void;

    /**
     * Popup lifecycle hook. Synchronously runs when the popup closes by user interaction (and not due to another popup
     * being fired).
     *
     * @default undefined
     * @param popup The popup DOM element.
     */
    willClose?(popup: HTMLElement): void;

    /**
     * Popup lifecycle hook. Asynchronously runs after the popup has been disposed by user interaction (and not due to
     * another popup being fired).
     *
     * @default undefined
     */
    didClose?(): void;

    /**
     * Popup lifecycle hook. Synchronously runs after popup has been destroyed either by user interaction or by another
     * popup.
     * If you have cleanup operations that you need to reliably execute each time a popup is closed, prefer
     * `didDestroy` over `didClose`.
     *
     * @default undefined
     */
    didDestroy?(): void;

    /**
     * Set to `false` to disable body padding adjustment when scrollbar is present.
=======
     * Function to run when popup built, but not shown yet. Provides popup DOM element as the first argument.
     *
     * @default undefined
     */
    onBeforeOpen?(popup: HTMLElement): void;

    /**
     * Function to run when popup opens, provides popup DOM element as the first argument.
     *
     * @default undefined
     */
    onOpen?(popup: HTMLElement): void;

    /**
     * Function to run after popup DOM has been updated.
     * Typically, this will happen after Swal.fire() or Swal.update().
     * If you want to perform changes in the popup's DOM, that survive Swal.update(), onRender is a good place for that.
     *
     * @default undefined
     */
    onRender?(popup: HTMLElement): void;

    /**
     * Function to run when popup closes by user interaction (and not by another popup), provides popup DOM element as the first argument.
     *
     * @default undefined
     */
    onClose?(popup: HTMLElement): void;

    /**
     * Function to run after popup has been disposed by user interaction (and not by another popup).
     *
     * @default undefined
     */
    onAfterClose?(): void;

    /**
     * Function to run after popup has been destroyed either by user interaction or by another popup.
     *
     * @default undefined
     */
    onDestroy?(): void;

    /**
     * Set to false to disable body padding adjustment when scrollbar is present.
>>>>>>> Stashed changes
     *
     * @default true
     */
    scrollbarPadding?: boolean;
  }

  export default Swal
}

declare module 'sweetalert2/*/sweetalert2.js' {
  export * from 'sweetalert2'
  // "export *" does not matches the default export, so do it explicitly.
  export { default } from 'sweetalert2' // eslint-disable-line
}

declare module 'sweetalert2/*/sweetalert2.all.js' {
  export * from 'sweetalert2'
  // "export *" does not matches the default export, so do it explicitly.
  export { default } from 'sweetalert2' // eslint-disable-line
}

/**
 * These interfaces aren't provided by SweetAlert2, but its definitions use them.
 * They will be merged with 'true' definitions.
 */

interface JQuery {
}
<<<<<<< Updated upstream
=======

interface Promise<T> {
}

interface Map<K, V> {
}
>>>>>>> Stashed changes
