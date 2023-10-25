using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore.Metadata.Internal;
using System.Collections.Generic;
using WebApplication1.Model;
using WebApplication1.Services;

namespace WebApplication1.Controllers
{
    public class HomeController : Controller
    {
        private readonly TestServices _services;
        public HomeController(TestServices services) 
        {
            _services = services;
        }
        public IActionResult test()
        {
            BookModels book = new BookModels();
            book.Id = 1;
            List<BookModels> books = new List<BookModels>();
            books.Add(new BookModels
            {
                Id=1,
                Name=_services.t()
            });
            books.Add(new BookModels
            {
                Id = 2,
                Name = "Mulawin"
            });
            ViewBag.Book = "awd";
            ViewBag.Books = books;
            Console.WriteLine(books[0].Id);
            return View(books);
        }
        public IActionResult test1()
        {
            List<BookModels> books = new List<BookModels>();
            books.Add(new BookModels
            {
                Id = 1,
                Name = _services.t()
            });
            books.Add(new BookModels
            {
                Id = 2,
                Name = "Mulawin"
            });
            return Json(
                new {}
                );
        }
    }
}
