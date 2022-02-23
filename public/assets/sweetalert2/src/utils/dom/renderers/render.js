import { getPopup } from '../getters.js'
import { renderActions } from './renderActions.js'
import { renderContainer } from './renderContainer.js'
import { renderContent } from './renderContent.js'
import { renderFooter } from './renderFooter.js'
<<<<<<< Updated upstream
import { renderCloseButton } from './renderCloseButton.js'
import { renderIcon } from './renderIcon.js'
import { renderImage } from './renderImage.js'
import { renderProgressSteps } from './renderProgressSteps.js'
import { renderTitle } from './renderTitle.js'
=======
import { renderHeader } from './renderHeader.js'
>>>>>>> Stashed changes
import { renderPopup } from './renderPopup.js'

export const render = (instance, params) => {
  renderPopup(instance, params)
  renderContainer(instance, params)

<<<<<<< Updated upstream
  renderProgressSteps(instance, params)
  renderIcon(instance, params)
  renderImage(instance, params)
  renderTitle(instance, params)
  renderCloseButton(instance, params)

=======
  renderHeader(instance, params)
>>>>>>> Stashed changes
  renderContent(instance, params)
  renderActions(instance, params)
  renderFooter(instance, params)

<<<<<<< Updated upstream
  if (typeof params.didRender === 'function') {
    params.didRender(getPopup())
=======
  if (typeof params.onRender === 'function') {
    params.onRender(getPopup())
>>>>>>> Stashed changes
  }
}
