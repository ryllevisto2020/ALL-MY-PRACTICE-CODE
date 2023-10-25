using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Routing;
using WebApplication1.Services;

var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddRazorPages();
builder.Services.AddMvc(
    options => {
        options.EnableEndpointRouting = false;
        }
);
builder.Services.AddTransient<TestServices>();
var app = builder.Build();

// Configure the HTTP request pipeline.
if (!app.Environment.IsDevelopment())
{
    app.UseExceptionHandler("/Error");
    // The default HSTS value is 30 days. You may want to change this for production scenarios, see https://aka.ms/aspnetcore-hsts.
    app.UseHsts();
}

app.UseHttpsRedirection();
app.UseStaticFiles();

app.UseRouting();

app.UseAuthorization();

app.MapRazorPages();

app.UseMvc(
    routes => {
        routes.MapRoute(
            name: "test",
            template: "test",
            defaults: new { controller = "Home", action = "test" }
            );

        routes.MapRoute(
            name: "test1",
            template: "test1",
            defaults: new { controller = "Home", action = "test1" }
            );
    }
);

app.Run();
