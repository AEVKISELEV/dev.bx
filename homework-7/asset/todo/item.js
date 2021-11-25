export class Item
{
	title;
	deleteButtonHandler;
	editButtonHandler;
	saveButtonHandler;
	clickEdit = false;

	constructor({title, deleteButtonHandler, editButtonHandler, saveButtonHandler})
	{
		this.title = String(title);
		if (typeof deleteButtonHandler === 'function')
		{
			this.deleteButtonHandler = deleteButtonHandler;
		}
		if (typeof editButtonHandler === 'function')
		{
			this.editButtonHandler = editButtonHandler;
		}
		if (typeof saveButtonHandler === 'function')
		{
			this.saveButtonHandler = saveButtonHandler;
		}
	}

	getData()
	{
		return {title: this.title};
	}

	render()
	{
		let title;
		const container = document.createElement('div');
		container.classList.add('item-container');

		if(this.clickEdit)
		{
			title = document.createElement('input');
			title.classList.add('item-title-input');
			title.value = this.title;
		}
		else
		{
			title = document.createElement('div');
			title.classList.add('item-title');
			title.innerText = this.title;
		}


		container.append(title);
		const buttonsContainer = document.createElement('div');
		const deleteButton = document.createElement('button');
		deleteButton.innerText = 'Delete';
		const editButton = document.createElement('button');
		editButton.innerText = 'Edit';
		const saveButton = document.createElement('button');
		saveButton.innerText = 'Save';

		deleteButton.addEventListener('click', this.handleDeleteButtonClick.bind(this));
		editButton.addEventListener('click', this.handleEditButtonClick.bind(this));
		saveButton.addEventListener('click', this.handleSaveButtonClick.bind(this));

		buttonsContainer.append(saveButton);
		buttonsContainer.append(editButton);
		buttonsContainer.append(deleteButton);

		container.append(buttonsContainer);

		return container;
	}

	handleDeleteButtonClick()
	{
		if (this.deleteButtonHandler)
		{
			this.deleteButtonHandler(this);
		}
	}
	handleEditButtonClick()
	{
		this.clickEdit = true;
		if (this.editButtonHandler)
		{
			this.editButtonHandler(this);
		}
	}
	handleSaveButtonClick()
	{
		this.clickEdit = false;
		if (this.deleteSaveHandler)
		{
			this.deleteSaveHandler(this);
		}
	}
	setIsEdit(value)
	{
		this.clickEdit = value;
	}


}