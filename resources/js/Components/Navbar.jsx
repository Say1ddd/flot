import { Link, usePage } from '@inertiajs/react';
import AppLogo from './AppLogo';
import '../../css/components/navbar.css';

export default function Navbar() {
    const { auth } = usePage().props;

    return (
        <nav className="navbar">
            <AppLogo />
            <ul className="navbar-nav">
                <li className="nav-item">
                    <Link className="nav-link" href={route('products.index')}>Products</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" href={route('brands.index')}>Brands</Link>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" href="#">About</Link>
                </li>
                <li className="nav-item">
                    {auth.user ? (
                        <Link className="nav-link" href="#">Logout</Link>
                    ) : (
                        <Link className="nav-link" href="#">Login</Link>
                    )}
                </li>
            </ul>
        </nav>
    );
}