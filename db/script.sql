USE [master]
GO
/****** Object:  Database [itec]    Script Date: 8/10/2021 12:06:15 ******/
CREATE DATABASE [itec]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'itec', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\itec.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'itec_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\itec_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [itec] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [itec].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [itec] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [itec] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [itec] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [itec] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [itec] SET ARITHABORT OFF 
GO
ALTER DATABASE [itec] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [itec] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [itec] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [itec] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [itec] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [itec] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [itec] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [itec] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [itec] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [itec] SET  DISABLE_BROKER 
GO
ALTER DATABASE [itec] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [itec] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [itec] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [itec] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [itec] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [itec] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [itec] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [itec] SET RECOVERY FULL 
GO
ALTER DATABASE [itec] SET  MULTI_USER 
GO
ALTER DATABASE [itec] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [itec] SET DB_CHAINING OFF 
GO
ALTER DATABASE [itec] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [itec] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [itec] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [itec] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'itec', N'ON'
GO
ALTER DATABASE [itec] SET QUERY_STORE = OFF
GO
USE [itec]
GO
/****** Object:  User [kevoru]    Script Date: 8/10/2021 12:06:15 ******/
CREATE USER [kevoru] FOR LOGIN [kevoru] WITH DEFAULT_SCHEMA=[dbo]
GO
ALTER ROLE [db_owner] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_securityadmin] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_ddladmin] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_backupoperator] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_datareader] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_denydatareader] ADD MEMBER [kevoru]
GO
ALTER ROLE [db_denydatawriter] ADD MEMBER [kevoru]
GO
/****** Object:  Table [dbo].[categoria]    Script Date: 8/10/2021 12:06:15 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[categoria](
	[Id_categoria] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](150) NULL,
PRIMARY KEY CLUSTERED 
(
	[Id_categoria] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[clientes]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[clientes](
	[id_cliente] [int] IDENTITY(1,1) NOT NULL,
	[rtn] [varchar](50) NULL,
	[nombre_p] [varchar](50) NULL,
	[direccion_p] [varchar](50) NULL,
	[telefono_p] [varchar](50) NULL,
	[empresa] [varchar](50) NULL,
	[estatus] [varchar](20) NULL,
	[fecha_creacion] [varchar](50) NULL,
	[usuario] [nchar](10) NULL,
	[clave] [nchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[orden_pedido]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[orden_pedido](
	[id_compra] [int] IDENTITY(1,1) NOT NULL,
	[num_factura] [int] NULL,
	[cantidad] [int] NOT NULL,
	[costo] [varchar](50) NOT NULL,
	[id_producto] [int] NOT NULL,
	[id_creador] [int] NOT NULL,
	[id_proveedor] [int] NOT NULL,
	[sub_total] [decimal](15, 0) NOT NULL,
	[total] [decimal](15, 0) NOT NULL,
	[estado] [varchar](50) NOT NULL,
	[fecha_creacion] [date] NOT NULL,
	[precio] [nchar](20) NULL,
 CONSTRAINT [pkcompra] PRIMARY KEY CLUSTERED 
(
	[id_compra] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[producto]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[producto](
	[Id_producto] [int] IDENTITY(1,1) NOT NULL,
	[codigo_producto] [int] NOT NULL,
	[descripcion_producto] [varchar](30) NOT NULL,
	[costo] [int] NOT NULL,
	[precio] [int] NOT NULL,
	[fecha_creacion] [date] NOT NULL,
	[fecha_vencimiento] [date] NOT NULL,
	[categoria] [int] NOT NULL,
	[cantidad] [int] NULL,
	[proveedor] [nchar](20) NULL,
	[Id_proveedor] [int] NULL,
 CONSTRAINT [pk2] PRIMARY KEY CLUSTERED 
(
	[Id_producto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[proveedor]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[proveedor](
	[Id_proveedor] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) NULL,
	[identidad] [varchar](15) NULL,
	[empresa] [varchar](15) NULL,
	[telefono] [varchar](15) NULL,
	[direccion] [varchar](15) NULL,
PRIMARY KEY CLUSTERED 
(
	[Id_proveedor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tempventas]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tempventas](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[codigo_producto] [int] NULL,
	[precioU] [int] NULL,
	[cantidad] [int] NULL,
	[precio_total] [int] NULL,
	[estado] [varchar](30) NULL,
	[fecha_creacion_factura] [date] NULL,
	[cliente] [varchar](10) NULL,
PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[usuarios]    Script Date: 8/10/2021 12:06:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[usuarios](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [nchar](25) NULL,
	[identidad] [nchar](25) NULL,
	[telefono] [nchar](15) NULL,
	[direccion] [nchar](35) NULL,
	[tipo_usuario] [nchar](15) NULL,
	[usuario] [nchar](25) NULL,
	[clave] [varchar](150) NULL,
	[estado] [varchar](10) NULL,
PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[orden_pedido]  WITH CHECK ADD  CONSTRAINT [fkcrea] FOREIGN KEY([id_creador])
REFERENCES [dbo].[usuarios] ([Id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[orden_pedido] CHECK CONSTRAINT [fkcrea]
GO
ALTER TABLE [dbo].[orden_pedido]  WITH CHECK ADD  CONSTRAINT [fkpro] FOREIGN KEY([id_producto])
REFERENCES [dbo].[producto] ([Id_producto])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[orden_pedido] CHECK CONSTRAINT [fkpro]
GO
ALTER TABLE [dbo].[orden_pedido]  WITH CHECK ADD  CONSTRAINT [fkprovee] FOREIGN KEY([id_proveedor])
REFERENCES [dbo].[proveedor] ([Id_proveedor])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[orden_pedido] CHECK CONSTRAINT [fkprovee]
GO
ALTER TABLE [dbo].[producto]  WITH CHECK ADD  CONSTRAINT [fk1] FOREIGN KEY([categoria])
REFERENCES [dbo].[categoria] ([Id_categoria])
GO
ALTER TABLE [dbo].[producto] CHECK CONSTRAINT [fk1]
GO
ALTER TABLE [dbo].[producto]  WITH CHECK ADD  CONSTRAINT [fkprov] FOREIGN KEY([Id_proveedor])
REFERENCES [dbo].[proveedor] ([Id_proveedor])
GO
ALTER TABLE [dbo].[producto] CHECK CONSTRAINT [fkprov]
GO
USE [master]
GO
ALTER DATABASE [itec] SET  READ_WRITE 
GO
