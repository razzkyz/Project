import './App.css'
import {BrowserRouter, Routes, Route} from 'react-router-dom'
import Home from './pages/Home'
import PageNotFound from './pages/PageNotFound'
import DetailPortfolio from './pages/DetailPortfolio'
import Experience from './pages/Experience'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/'  element={<Home />}/>
        <Route path='/portfolio/:id'  element={<DetailPortfolio />}/>
        <Route path='/page-not-found' element={<PageNotFound />}/>
        <Route path='/experience' element={<Experience />}/>
        <Route path='*' element={<PageNotFound />}/>
      </Routes>
    </BrowserRouter>
  )
}

export default App
