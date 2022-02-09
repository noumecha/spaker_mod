import { library,dom  } from '@fortawesome/fontawesome-svg-core'
import { faHeart, faStar  } from   '@fortawesome/free-regular-svg-icons/'
import {  faExchangeAlt, faShoppingCart, faAngleDoubleUp, faEye, faAngleLeft,  faAngleRight  } from   '@fortawesome/free-solid-svg-icons/'
import { faFacebook, faGooglePlusG, faLinkedin, faPinterest, faTwitter } from   '@fortawesome/free-brands-svg-icons/'

library.add(faAngleLeft,faAngleRight,faStar,faHeart,faExchangeAlt,faShoppingCart,faAngleDoubleUp,faFacebook,faLinkedin,faGooglePlusG,faEye,faPinterest,faTwitter)
//var i= icon(circle)
dom.watch({
    autoReplaceSvgRoot: document,
    observeMutationsRoot: document.body,
    autoAddCss:true
  })