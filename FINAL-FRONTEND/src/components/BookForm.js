import React, { useEffect, useState } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import '../styles.css'; 

const BookForm = ({ onSuccess }) => { 
    const { id } = useParams();
    const navigate = useNavigate();
    const [formData, setFormData] = useState({
        title: '',
        author: '',
        published_year: '',
        genre: '',
        description: '',
    });

    useEffect(() => {
        if (id) {
            const fetchBook = async () => {
                try {
                    const response = await fetch(`http://localhost:8000/api/books/${id}`);
                    if (!response.ok) throw new Error('Failed to fetch book');
                    const data = await response.json();
                    setFormData(data);
                } catch (error) {
                    console.error(error);
                }
            };
            fetchBook();
        }
    }, [id]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        const method = id ? 'PUT' : 'POST';
        const url = id ? `http://localhost:8000/api/books/${id}` : 'http://localhost:8000/api/books';

        try {
            const response = await fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            });
            if (!response.ok) throw new Error('Failed to save book');
            onSuccess(id ? 'Book updated successfully!' : 'Book added successfully!');
            navigate('/'); // Navigate to home after success
        } catch (error) {
            console.error(error);
        }
    };

    return (
        <div className="form-container">
    <form className="book-form" onSubmit={handleSubmit}>
        <h2>{id ? 'Edit Book' : 'Add New Book'}</h2>

        <div className="form-group">
            <label htmlFor="title">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                placeholder="Title" 
                value={formData.title} 
                onChange={handleChange} 
                required 
            />
        </div>

        <div className="form-group">
            <label htmlFor="author">Author</label>
            <input 
                type="text" 
                id="author" 
                name="author" 
                placeholder="Author" 
                value={formData.author} 
                onChange={handleChange} 
                required 
            />
        </div>

        <div className="form-group">
            <label htmlFor="published_year">Published Year</label>
            <input 
                type="number" 
                id="published_year" 
                name="published_year" 
                placeholder="Published Year" 
                value={formData.published_year} 
                onChange={handleChange} 
                required 
            />
        </div>

        <div className="form-group">
            <label htmlFor="genre">Genre</label>
            <input 
                type="text" 
                id="genre" 
                name="genre" 
                placeholder="Genre" 
                value={formData.genre} 
                onChange={handleChange} 
                required 
            />
        </div>

        <div className="form-group">
            <label htmlFor="description">Description</label>
            <textarea 
                id="description" 
                name="description" 
                placeholder="Description" 
                value={formData.description} 
                onChange={handleChange} 
                required 
            />
        </div>

        <div className="button-container">
            <button type="submit" className="submit-btn">{id ? 'Update Book' : 'Add Book'}</button>
            <button type="button" className="cancel-btn" onClick={() => navigate('/')}>Cancel</button>
        </div>
    </form>
</div>

    );
};

export default BookForm;
