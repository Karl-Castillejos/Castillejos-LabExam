import React from 'react';
import { Link } from 'react-router-dom';
import '../styles.css';

// Import images
import narutoBook from '../assets/images/narutoBook.png';
import opBook from '../assets/images/opBook.png';
import bleachBook from '../assets/images/bleachBook.png';
import dbzBook from '../assets/images/dbzBook.png';
import aotBook from '../assets/images/aotBook.png';
import fmaBook from '../assets/images/fmaBook.png';
import hxhBook from '../assets/images/hxhBook.png';
import dnBook from '../assets/images/dnBook.png';
import vsBook from '../assets/images/vsBook.png';
import opmBook from '../assets/images/opmBook.png';
import knyBook from '../assets/images/knyBook.png';
import jjkBook from '../assets/images/jjkBook.png';


const bookImages = {
    1: narutoBook,
    2: opBook,
    3: bleachBook,
    4: dbzBook,
    5: aotBook,
    6: fmaBook,
    7: hxhBook,
    8: dnBook, 
    9: vsBook,
    10: opmBook, 
    11: knyBook,
    12: jjkBook,
    // Add more book images here if needed
};

const BookList = ({ books, onDelete }) => {
    return (
        <div className="book-list">
            {/* Add Book Button */}
            <Link to="/add">
                <button className="add-book-button">Add Book</button>
            </Link>

            <h2 className="book-list-title center-top">Book List</h2>

            <div className="card-container">
                {books.map((book) => (
                    <div key={book.id} className="card-link">
                        <Link to={`/view/${book.id}`} className="card">
                            <div
                                className="card"
                                style={{ backgroundImage: `url(${bookImages[book.id] || '/images/placeholder.jpg'})` }} // Default image if not found
                            >
                                <div className="card-overlay">
                                    <h3>{book.title}</h3>
                                    <p>Author: {book.author}</p>
                                </div>
                            </div>
                        </Link>

                        {/* Container for Edit and Delete Buttons */}
                        <div className="card-actions-container">
                            <Link to={`/edit/${book.id}`}>
                                <button className="edit-button">Edit</button>
                            </Link>

                            <button
                                className="delete-button"
                                onClick={(e) => {
                                    e.stopPropagation(); // Prevent triggering card link
                                    onDelete(book.id);
                                }}
                            >
                                Delete
                            </button>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default BookList;
