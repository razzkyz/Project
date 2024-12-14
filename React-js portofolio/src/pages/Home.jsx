import Navbar from '../components/Navbar'
import Header from '../components/Header'
import Portfolio from '../components/Portfolio'
import About from '../components/About'
import Footer from '../components/Footer'
import Daun from '../components/Daun'
function home() {
  return (
    <>
      <Daun />
      <Navbar />
      <Header />
      <Portfolio />
      <About />
      <Footer />
    </>

  )
}

export default home
