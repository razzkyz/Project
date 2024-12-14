import Navbar from '../components/Navbar'
import Footer from '../components/Footer'
function PageNotFound() {
  return (
    <>
    <Navbar/>
    <div className="wrapper">
            <h3>Ooops...</h3>
            <p>Halaman Yang Anda Tuju Tidak Ditemukan</p>
    </div>
    <Footer/>
    </>
  )
}

export default PageNotFound
